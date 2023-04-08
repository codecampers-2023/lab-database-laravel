<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Member;
class TaskController extends Controller
{
    public function index(){
        $task = Task::find(1);
        if($task == null ){
            $task = new Task;
            $task->project_id = 1;
            $task->name = "Task1";
            $task->description = "Description task1";
            $task->save();
        }

        $member = Member::find(1);
        if($member == null){
            $member = new Member;
            $member->first_name = "Madani Ali";
            $member->last_name = "Madani Ali";
          
            $member->save();
        }

        $task->member()->attach($member->id);
        $task->save();

        dd($task);
    }
}
