<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectController extends Controller
{
    public function create()
    {
        return view('projects.create', [
            // 'projects' => Project::all()
        ]);
    }

    public function store()
    {
        $attributes = $this->validate(request(), [
            'name' => 'required',
            'description' =>  'required'
        ]);

        Project::forceCreate([
            'name' => $attributes['name'],
            'description' => $attributes['description']
        ]);

        return ['message' => 'Project Created!'];
    }
}
