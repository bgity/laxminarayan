<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = "sam_users";
    protected $fillable = [
        "first_name",
        "middle_name",
        "last_name",
        "looking_for",
        "client_id",
        "user_img1",
        "birth_date",
        "birth_time",
        "birth_place",
        "birth_district",
        "spects",
        "physical_disable",
        "martial_status",
        "passport",
        "blood_group",
        "hobbies",
        "email",
        "mobile",
        "address",
        "education",
        "add_qualification",
        "income",
        "service_bussiness",
        "manglik",
        "gotra",
        "nakshatra",
        "gan",
        "nadi",
        "charan",
        "father_occupation",
        "mother_father_native",
        "brother_married",
        "brother_unmarried",
        "sister_married",
        "sister_unmarried",
        "exp_martial_status",
        "exp_height",
        "exp_age_diff",
        "exp_complexion",
        "exp_education",
        "exp_occupation",
        "exp_income",
        "exp_maglik",
        "exp_horiscope",
        "exp_spect",
        "exp_preferd_city",
        "updated_at",
        "created_at"

    ];
}