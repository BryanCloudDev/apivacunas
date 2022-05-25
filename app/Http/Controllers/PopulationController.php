<?php

namespace App\Http\Controllers;
use App\Models\Population;
use Illuminate\Http\Request;

class PopulationController extends Controller
    {
        public function index()
            {
                $populations = Population::all();
                return $populations;
            }

        public function store(Request $request)
            {
                $population = new Population();

                $population->states                     = $request->states;
                $population->total_population           = $request->total_population;
                $population->unvaccinated_population    = $request->unvaccinated_population;
                $population->vaccinated_population      = $request->vaccinated_population;

                $population->save();

                return $population;
            }

        public function show($id)
            {
                $population = Population::find($id);
                return $population;
            }

        public function update(Request $request, $id)
            {
                $population = Population::findOrFail($request->id);

                $population->states                     = $request->states;
                $population->total_population           = $request->total_population;
                $population->unvaccinated_population    = $request->unvaccinated_population;
                $population->vaccinated_population      = $request->vaccinated_population;

                $population->save();

                return $population;
            }

        public function destroy($id)
            {
                $population = Population::destroy($id);
                return $population;
            }
    }

?>