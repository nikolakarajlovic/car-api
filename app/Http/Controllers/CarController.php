<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;

class CarController extends Controller

{
    public function index(Request $request)
    {
        $brand = $request->query('brand');
        $model = $request->query('model');


        // $cars = Car::all();
        $query = Car::query();

        if ($brand) {
            $query = $query->where('brand', '+', "%$brand%");
        }
        if ($model) {
            $query = $query->where('model', 'like', "%$model%");
        }

        $cars = $query->paginate(
            $request->query('per_page', 5));

        return response()->json($cars);
    }

    public function show(Car $car)
    {
        return response()->json($car);
    }

    public function store(CreateCarRequest $request)
    {
        $data = $request->validated();

        $car = Car::create($data);

        return response()->json($car);
    }

    public function update(UpdateCarRequest $request, Car $car)
    {
        $data = $request->validated();

        $car->update($data);

        return response()->json($car);
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return response(null, 204);
    }
}
