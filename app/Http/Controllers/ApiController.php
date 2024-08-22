<?php

namespace App\Http\Controllers;

class ApiController extends Controller {
    public function status() {
        return response([
            'message' => 'Working =)',
        ]);
    }

    public function version() {
        return response([
            'version' => config('hydra.version'),
        ]);
    }
}
