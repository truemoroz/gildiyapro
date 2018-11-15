<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Status;
use App\Author;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    //контроллер страницы заданий
    public function index()
    {
        $tasks = DB::select('select * from task_view');
        return view('tasks', compact('tasks'));
    }

//   метод удаления задачи
    public function delete($id)
    {
        Task::where('id', '=', $id)->delete();
    }

//    контроллер формы добавления
    public function addForm()
    {
        $statuses = Status::all();
        return view('tasks_add', compact('statuses'));
    }

//    метод добавления задачи
    public function add(Request $request)
    {
        $name = $request->name;
        $title = $request->title;
        $status = $request->status;


        // получаем автора по имени
        $author = Author::where('name', '=', $name)->first();

//      если автора нет, то добавляем его в базу
        if (empty($author)) {
            $author = new Author;
            $author->name = $name;
            $author->save();
            $author = Author::where('name', '=', $name)->first();
        }

//      создаём новую задачу
        $task = new Task;
        $task->subject = $title;
        $task->author_id = $author->id;
        $task->status_id = $status;
        $task->save();

//      возвращаем на страницу заданий
        $tasks = DB::select('select * from task_view');
        return view('tasks', compact('tasks'));

    }
}
