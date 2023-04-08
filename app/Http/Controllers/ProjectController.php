<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::find(1);
        dd($project);
    }

    public function store(){
        $project = new Project;
        $project->name = 'projet 1';
        $project->description = 'description du projet 1';
        $project->save();
        dd($project);
    }
}
