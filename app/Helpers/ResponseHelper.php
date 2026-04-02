<?php

namespace App\Helpers;

class ResponseHelper {
    public static function success($data = null ,$message="Success", $statusCode = 200)
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }

    public static function error($message="Error", $errors = null, $statusCode = 400)
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'errors' => $errors
        ], $statusCode);
    }
}


?>
