<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function index() {
        $greetingMessage = "Goede avond!";

        /* This sets the $time variable to the current hour in the 24 hour clock format */
        $time = date("H");

        /* If the time is less than 1200 hours, show good morning */
        if ($time < "12") {
            $greetingMessage = "Goede morgen!";
        } else {

            /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
            if ($time >= "12" && $time < "17") {
                $greetingMessage = "Goede middag!";
            }
        }

        return view('dashboard', [
            'greeting' => $greetingMessage,
            'today' => Carbon::today("Europe/Amsterdam")->format('l d-m-Y'),
        ]);
    }
}