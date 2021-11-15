<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::with(['user'])->where('user_id',3)->get();
        return view('timeline',compact('event'));
        //return view('home');
    }

    public function ajaxtimeline(Request $request)
    {
        return response()->json(['success'=> $request->description.' '.$request->user]);
    }

    public function getajaxcalendar(){
        $data=\DB::table('events')->select('title as title','date_event as start','date_event as end')->get();
        return response()->json($data);
    }

    public function getEvents(Request $request){
        if($request->ajax()){
            $data = Event::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function events(){
        return view('eventtable');
    }

    public function calendar_event(Request $request)
    {
        if($request->ajax()){
            $data=\DB::table('events')->select('description as title','date_event as start','date_event as end')->get();
            return response()->json($data);
        }
        return  view('calendarlte');
    }
}
