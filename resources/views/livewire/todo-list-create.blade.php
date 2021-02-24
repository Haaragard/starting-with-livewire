<div>
    <form wire:submit.prevent="save">
        <div class="flex-row">
            <div class="flex-row">
                <label for="" class="flex">{{ __('List name') }}</label>
                <input class="flex" type="text" wire:model.debounce.500ms="todoList.name">
            </div>
            @error('required')
                <div class="">
                    <span class=""></span>
                </div>
            @enderror

            <div class="mt-3">
                <span class="flex">{{ $todoList->name }}</span>
            </div>

            <button class="mt-3 px-2 py-1 rounded border border-gray-700" type="submit">{{ __('Add new') }}</button>
        </div>
    </form>
</div>
