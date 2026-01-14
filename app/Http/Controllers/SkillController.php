<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller {
    public function index() {
        return Skill::all();
    } public function show($id) {
        return Skill::findOrFail($id);
    }
}
