<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo List ni Juan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Styles -->
    <style>
    </style>
</head>

<body>
    <div class="wrapper">
        <h1 id="title">To Do List</h1>
    
        <div class="todolist">
            <div class="item-list">
                @foreach ($listItem as $listItem)
                <div class="items-div">
                    <p id="item-id">{{ $listItem->name }}</p>
            
                    <form action="{{ route('markDone',$listItem->id) }}" method="post">
                        @csrf
                        <button id="donebtn"  type="submit">Done</button>
                    </form>
            
                </div>
                @endforeach
            </div>
        
            <div class="input-div">
                <form action="{{ route('saveItem') }}" method="post">
                    @csrf
                    <input id="input-box" name="newtodo" type="text" placeholder="Create Todo...">
                    <button id="submitbtn">Save Todo</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>