<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Userlogin as Userlogin;
use App\Models\Userdetail as Userdetail;
use App\Http\Resources\UserloginResource;



class UserloginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'firstName'=>['required'],
            'middleName'=>['required'],
            'lastName'=>['required'],
            'contact'=>['required','min:9'],
            'gender'=>['required','in:male,female,others'],
            'birthDate'=>['required','date'],
            'companyName'=>['required'],

            'email'=>['required','email'],
            'password'=>['required'],
            'recoveryEmail'=>['required','email']
        ]);
        if ($validator->fails()) {
            return response()->json($validation->errors() , 422);
        }
        $userdetails['firstName']=$request->firstName;
        $userdetails['middleName']=$request->middleName;
        $userdetails['lastName']=$request->lastName;
        $userdetails['gender']=$request->gender;
        $userdetails['contact']=$request->contact;
        $userdetails['companyName']=$request->companyName;
        $userdetails['birthDate']=$request->birthDate;
        $userdetails['userlogin_id']=$request->userlogin_id;
        $userdetails['role_id']=$request->role_id;

        $userlogins['email']=$request->email;
        $userlogins['recoveryEmail']=$request->recoveryEmail;
        $userlogins['password']=bcrypt($request->password);
        

        $userLoginDetail=Userlogin::create($userlogins);
        $usercreation=UserDetail::create($userdetails);

        return new UserLoginResource($userLoginDetail);
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userdetails=UserLogin::findOrFail($id);
        return UserloginResource($userdetails);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
