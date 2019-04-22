<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\blue1;

class blue extends BaseController{
    function index(){
        return view('index');
    }

    /*function contact(){
        return view('contact');
    }*/

    public function myReservation(){
        $blue1=new blue1();
        $date=$this->date;
        $blue1->date=$date;
        $time=$this->time;
        $blue1->time=$time;
        $person=$this->person;
        $blue1->person=$person;
        $lastname=$this->lastname;
        $blue1->lastname=$lastname;
        $message=$this->reservation-message;
        $blue1->message=$message;
        if($reservation->save())
        {
            echo "yes";
        }
        else{
            echo "no";
        }
    }
}

?>