<?php

namespace App\Http\Controllers;

use App\Models\Save;
use App\Http\Requests\StoreSaveRequest;
use App\Http\Requests\UpdateSaveRequest;
use Illuminate\Support\Facades\Validator;

class SaveController extends Controller
{
     
    public function add()
    {
        try {      
            if(!auth()->check()){
                return response()->json(['message' => 'Unauthorized ⚠️'], 401);
            }  
               request()->validate([
                'user_id' => 'required|integer', 
                'topic' => 'required|string', 
                'type' => 'required|string', 
            ]);
     $saved=
        return response()->json(['message' => 'Successfully  Saved Item 👍',"saved"=>$saved],200); 
    
    }
  catch (\Throwable $th) {
        //   throw $th;
          return response()->json([
           'message' => 'This error is from the backend, please contact the backend developer'],500);
        
      }
    }

 public function get($user_id)
 {
      try {
            if(!auth()->check()){
                return response()->json(['message' => 'Unauthorized ⚠️'], 401);
            }  
        $data=Save::where("user_id",$user_id)->with("user")->get();
        return response()->json(['message' => 'Successfully Loaded  Saved Items','saved'=>$data],200); 
      } catch (\Throwable $th) {
        //   throw $th;
          return response()->json([
           'message' => 'This error is from the backend, please contact the backend developer'],500);
        
      }
 }
}