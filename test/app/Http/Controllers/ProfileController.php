<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //

        return view('profile.edit', ['profile' => auth()->user()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $user = auth()->user();
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mobile' => $request->mobile,
            'email'=> $request->email
        ]);
        return redirect('/view');

      //  $this->validate($request, [
       //     'first_name' => 'required|max:255',
        //    'last_name' => 'required|max:255',
        //    'mobile' => 'required|max:255',
        //    'email'=> 'required|email|max:255|unique:users,email,'.$user->id
       // ]);
        
        //$input = $request->only('first_name', 'last_name', 'email', 'mobile');  
        //$user->update($input);
        //return back();
        //return redirect('/')->with('success', 'Your profile has been saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
