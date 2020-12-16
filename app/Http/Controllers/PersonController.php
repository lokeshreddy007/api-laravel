<?php

namespace App\Http\Controllers;

use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Show Particualr Person details
     *
     * @param Person $person
     * @return PersonResource
     */
    public function show(Person $person): PersonResource
    {
        return new PersonResource($person);
    }

    /**
     * Return All the Person deatails
     *
     * @return PersonResourceCollection
     */
    public function index(): PersonResourceCollection
    {
        return new PersonResourceCollection(Person::paginate());
    }

    /**
     * Add Person 
     *
     * @param Request $request
     * @return PersonResource
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'phone' => 'required',
        ]);
        $person = Person::create($request->all());
        return new PersonResource($person);
    }

    public function update(Request $request, Person $person): PersonResource
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'phone' => 'required',
        ]);
        $person->update($request->all());
        return new PersonResource($person);
    }
}
