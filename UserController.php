<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public function getData()
    {
        //return response()->json(UserModel::get(), 200);
        return UserModel::all();
    }
    public function getDataByID($id = null)
    {
        return $id ? UserModel::find($id) : UserModel::all();
    }
    public function addBrideGrooms(Request $req)
    {
        $user = new UserModel;
        $user->first_name = $req->first_name;
        $user->middle_name = $req->middle_name;
        $user->last_name = $req->last_name;
        $user->looking_for = $req->looking_for;
        $user->birth_date = $req->birth_date;
        $user->birth_time = $req->birth_time;
        $user->birth_place = $req->birth_place;
        $user->birth_district = $req->birth_district;
        $user->spects = $req->spects;
        $user->physical_disable = $req->physical_disable;
        $user->martial_status = $req->martial_status;
        $user->passport = $req->passport;
        $user->blood_group = $req->blood_group;
        $user->hobbies = $req->hobbies;
        $user->email = $req->email;
        $user->mobile = $req->mobile;
        $user->address = $req->address;
        $user->education = $req->education;
        $user->add_qualification = $req->add_qualification;
        $user->income = $req->income;
        $user->service_bussiness = $req->service_bussiness;
        $user->manglik = $req->manglik;
        $user->gotra = $req->gotra;
        $user->nakshatra = $req->nakshatra;
        $user->gan = $req->gan;
        $user->nadi = $req->nadi;
        $user->charan = $req->charan;
        $user->father_occupation = $req->father_occupation;
        $user->mother_father_native = $req->mother_father_native;
        $user->brother_married = $req->brother_married;
        $user->brother_unmarried = $req->brother_unmarried;
        $user->sister_married = $req->sister_married;
        $user->sister_unmarried = $req->sister_unmarried;
        $user->exp_martial_status = $req->exp_martial_status;
        $user->exp_height = $req->exp_height;
        $user->exp_age_diff = $req->exp_age_diff;
        $user->exp_complexion = $req->exp_complexion;
        $user->exp_education = $req->exp_education;
        $user->exp_occupation = $req->exp_occupation;
        $user->mother_father_native = $req->mother_father_native;
        $user->exp_income = $req->exp_income;
        $user->exp_maglik = $req->exp_maglik;
        $user->exp_horiscope = $req->exp_horiscope;
        $user->exp_spect = $req->exp_spect;
        $user->exp_preferd_city = $req->exp_preferd_city;
        $user->client_id = $req->client_id;
        $user->user_img1 = $req->file('user_img1')->store('userimg/' . $user->client_id);

        $result = $user->save();
        if ($result) {
            return ["result" => "data saved"];
        } else {
            return ["result" => "data not saved"];
        }
    }
}