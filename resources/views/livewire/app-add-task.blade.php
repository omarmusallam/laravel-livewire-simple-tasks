<div>
    <h3 class="text-center">Add New Task</h3>
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" wire:model="title" class="form-control">
        @error('title')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <button wire:click.prevent="addTask" class="btn btn-primary btn-block">Add</button>
    </div>
    </form>
</div>
