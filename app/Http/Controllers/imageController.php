<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Carbon\Carbon;
use Illuminate\Http\Request;

class imageController extends Controller
{
    public function index() {


        $images = Image::orderBy('id', 'desc')->limit(10)->get();

        return view("images", [
            "images" => $images
        ]);
    }

    public function create(Request $request) {
        $image = new Image();
        $image->timestamp = Carbon::now();
        $image->base64_image = $request->insertUpload;
        $image->save();
        return response()->json($image, 200);
    }
}
