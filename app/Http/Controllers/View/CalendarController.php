<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\CalendarModel;

class CalendarController extends Controller
{
    public function index()
    {
        $events = array();
        $calendars = CalendarModel::get();
        foreach ($calendars as $calendar){
            $duration = "+".$calendar->duration." hours";
            $events[] = array(
                'title' => $calendar->content,
                'start' => $calendar->start_time,
                'end'   => date("Y-m-d H:i:s",strtotime ($duration, strtotime($calendar->start_time)))
            );
        }
        return view('calendar',['events'=>json_encode($events)]);
    }
}
