<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OperationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    /**
     * function for sum
     * value1 is valor1
     * value2 is valor2
     */

    public function sum($value1,$value2)
    {
      $total= $value1+$value2;
        return view('operations.sum')->with(compact('value1','value2','total'));
    }
    /**
     * function for subtraction
     */
    public function subtraction($value1,$value2)
    {
        return $value1-$value2;
    }
    /**
     * function for multiplication
     */
    public function multiplication()
    {
        return 'se esta ejecuentado la multiplication';
    }
    /**
     * function for division
     */
    public function division()
    {
        return 'se esta ejecuentado la division';
    }
}

