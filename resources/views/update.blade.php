@extends('layout.app')
@section('edit')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                @foreach ($tasks as $task)
                    <div class="panel-heading">
                        Edit Task  : {{ $task->name }}
                    </div>
                @endforeach
                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    <!-- New Task Form -->
                    @foreach ($tasks as $task)
                        <form action="{{ url('update/' . $task->id) }}" method="POST" class="form-horizontal">
                            @csrf
                            <!-- Task Name -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label"> New Task</label>

                                <div class="col-sm-6">
                                    <input type="text" name="name" id="task-name" class="form-control" value="">
                                </div>
                            </div>

                            <!-- Add Task Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-btn fa-edit"></i>Edit Task
                                    </button>
                                </div>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
