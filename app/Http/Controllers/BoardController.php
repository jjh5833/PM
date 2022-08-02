<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class BoardController extends Controller
{

    public function pdf()
    {
        return view('test.pdf');
    }
    public function copy()
    {
        return view('test.copyTest');
    }
    public function test()
    {
        $tests = Test::orderby('work', 'desc')->paginate(1); 
        
        return view('test.test')
        ->with('tests', $tests);
    }


    public function store(Request $request)
    {
            $test = new Test;
            $test->work = $request->work;
            $test->company = $request->company;
            $test->workday = $request->workday;
            $test->work_manager = $request->work_manager;
            $test->work_place = $request->work_place;
            $test->work_worker = $request->work_worker;
            $test->work_tf = $request->work_tf;
            

            $test->save();
        

        $result = $request->all();

        $data = array(
            'result' => $result
        );

        return response()->json($data);
    }



}
