<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    public function show()
    {
        $cvPath = storage_path('app/public/cv.pdf');

        if (!file_exists($cvPath)) {
            return response()->json(['error' => 'CV not found'], 404);
        }

        return response()->file($cvPath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="cv.pdf"'
        ]);
    }
}
