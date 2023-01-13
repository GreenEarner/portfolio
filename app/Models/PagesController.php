<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class PagesController extends Model
{
    use HasFactory;

    public function index () {
        return view('index');
    }

    public function feature ($title) {
        $img = '';
        if ($title == 'Natural Process') {
            $img = "/assets/images/features/fea-1.jpg";
        }else if ($title == 'Organic Products') {
            $img = "/assets/images/features/fea-2.jpg";
        }else if ($title == 'Biologically Safe') {
            $img = "/assets/images/features/fea-3.jpg";
        }else {
            abort(404);
        }

        return view('feature', [
            'img' => $img
        ]);
    }
}
