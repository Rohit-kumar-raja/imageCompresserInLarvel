<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $this->compress($request,'200','200');
        return back();
    }
    public function compress($request,$width ,$height)
    {
        $image = $request->file('file');
        $filename = date('Y-m-d-H:i:s') . '-' . $image->getClientOriginalName();
        $path = public_path('upload/image/' . $filename);
        Image::make($image->getRealPath())->resize($width,$height)->save($path);
    }
}
