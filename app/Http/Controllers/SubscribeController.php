<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use App\Http\Requests\StoreSubscribeRequest;
use App\Http\Requests\UpdateSubscribeRequest;
use App\Models\Save;

class SubscribeController extends Controller
{
      public function add()
    {
        try {      
            if(!auth()->check()){
                return response()->json(['message' => 'Unauthorized ⚠️'], 401);
            }  
               request()->validate([
                'user_id' => 'required|integer'
            ]);
     $saved=Subscribe::create(array_merge(request()->all(),[
        
     ]));
        return response()->json(['message' => 'Successfully  Saved Item 👍',"Subscribe"=>$saved],200); 
    
    }
  catch (\Throwable $th) {
        //   throw $th;
          return response()->json([
           'message' => 'This error is from the backend, please contact the backend developer'],500);
        
      }
    }
    public function get(){
     try {
       if(!auth()->check()){
                return response()->json(['message' => 'Unauthorized ⚠️'], 401);
            }  
       $user_id=auth()->user()->id;
     } catch (\Throwable $th) {
      //throw $th;
         return response()->json([
           'message' => 'This error is from the backend, please contact the backend developer'],500);
        
      }
     }
      
    }
}