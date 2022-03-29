<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {

        $cars = Car::all();

        return view("/list_cars", [
            "cars" => $cars
        ]);

        /*
        return view ("/list_cars", compact($cars)); //így is meg lehet a fenti returnt megcsinálni
        */
    }

    public function create()
    {
        return view("new_car");
    }

    public function store(Request $request)
    {

        //csak egy teszt így kapom meg tömbben az adatokat
        // $car = $request->all();
        // echo "<pre>";
        // print_r($car);

        Car::create($request->all());

        return redirect("/");  //visszaírányítjuk a főoldalra
    }

    public function edit($id)
    {
        $car = Car::find($id);  //find-al kikeresem azt az id-t amit kértem és azt szerkesztjük

        return view("edit_car", [
            "car" => $car
        ]);
    }

    public function update(Request $request)
    {
        $car = Car::find($request->id);

        $car->update($request->all());

        return redirect("/");
    }

    public function search(Request $request)
    {
        $cars = Car::where("color", $request->color)->get(); //megszólítom a modelt és a request-el lekérjük a színt

        return view("show_car",[
            "cars" => $cars
        ]);

        // adatok ellenőrzésére kell hogy ezután átküldhessük ezt a showcar nézetnek
        // echo "<pre>";
        // print_r($cars);
    }

    public function destroy($id)
    {
        Car::destroy($id);

        return redirect("/");
    }
}
