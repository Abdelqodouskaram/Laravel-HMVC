<?php

namespace Modules\Parts\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Parts\Models\Part;

class PartController extends Controller
{
    public function index()
    {
        $parts = Part::get();
        return response([$parts],200);
    }
}
