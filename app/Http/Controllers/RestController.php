<?php

namespace App\Http\Controllers;

use App\Rest;
use Illuminate\Http\Request;

class RestController extends Controller
{
    public function index(){
       $data = Rest::all();
       if(count($data)){
         return response([
             'status'=>1,
             'message'=>'Rest Data',
             'data'=>$data
         ]);
       }else{
        return response([
            'status'=>0,
            'message'=>'no Data',
        ]);
       }
    }
    public function addrestdata(Request $request){
        $insert = Rest::create($request->all());
      if($insert){
          return response([
              'status'=>1,
              'message'=>'Add',
          ]);
      }
      else{
        return response([
            'status'=>0,
            'message'=>'Not Add',
        ]);
      }
    }
    public function update(Request $request){
        $update = Rest::find($request->id);
        $update->update($request->all());
         if($update){
             return response([
                 'status'=>1,
                 'message'=>'updated'
             ]);
         }
         else{
            return response([
                'status'=>0,
                'message'=>'not updated'
            ]);
         }
    }
    public function delete(Request $request){
        $data = Rest::find($request->id);
        $result = $data->delete();
        if($result){
            return response([
                'message'=>'message deleted'
            ]);
        }
    }
    
}
