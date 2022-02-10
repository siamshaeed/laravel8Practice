<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;


class RelationshipController extends Controller
{
    public function oneToOneRelation(){
    //    return $data =  Profile::find(2)->getUsers->name;
     $data =  Profile::find(1)->getUsers->name;
     return $data;
    }
}
