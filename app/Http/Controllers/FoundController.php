<?php

namespace App\Http\Controllers;

use App\ProductFound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoundController extends Controller
{
    public  function test(){

    $pf=new ProductFound();
    $pf->desc='aaaa';
        $pf->localisation='aaaa';
        $pf->numero='aaaa';
        $pf->titre='aaaa';
        $pf->type='aaaa';
        $pf->catageorie='aaaa';
        $pf->users_id=Auth::id();
        $pf->save();



    }
}
