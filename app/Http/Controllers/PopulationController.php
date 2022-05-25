<?php

namespace App\Http\Controllers;
use App\Models\Population;
use Illuminate\Http\Request;

class PopulationController extends Controller
    {
        public function index()
            {
                $population = Population::all();
                return $population;
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

        public function show($state_id)
            {
                $population = Population::find($state_id);
                return $population;
            }

        public function update(Request $request, $state_id)
            {
                $population = Population::findOrFail($request->state_id);

                $population->states                     = $request->states;
                $population->total_population           = $request->total_population;
                $population->unvaccinated_population    = $request->unvaccinated_population;
                $population->vaccinated_population      = $request->vaccinated_population;

                $population->save();

                return $population;
            }

        public function destroy($state_id)
            {
                $population = Population::destroy($state_id);
                return $population;
            }
    }

?>