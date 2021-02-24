<?php

namespace App\Http\Livewire;

use App\Models\TodoList;
use App\Models\User;
use Livewire\Component;

class TodoListCreate extends Component
{
    public TodoList $todoList;

    protected $rules = [
        'todoList.name' => 'required|string|max:50',
    ];

    public function mount()
    {
        $this->fill([
            'todoList' => new TodoList,
            'todoList.name' => '',
        ]);
    }

    public function save()
    {
        $this->validate();

        User::find(auth()->user()->id)
            ->todoLists()->save($this->todoList);

        redirect('todo-list');
    }

    public function render()
    {
        return view('livewire.todo-list-create');
    }
}
