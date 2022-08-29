<?php

namespace App\Http\Controllers;

 
use App\Models\User;

class SubscribeController extends Controller
{
  public function subscribe()
  { 

    try {
      if (!auth()->check()) {
        return response()->json(['message' => 'Unauthorized ⚠️'], 401);
      }
      request()->validate([
        'user_id' => 'required'
      ]);

      $sub = User::find(request()->user_id);
      $sub->update(["isSub" => true]);
      return response()->json(['message' => 'Successfully  Saved Item 👍', "Subscribe" => $sub], 200);
    } catch (\Throwable $th) {
      //   throw $th;
      return response()->json([
        'message' => 'This error is from the backend, please contact the backend developer'
      ], 500);
    }
  }
}
