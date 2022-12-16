<form wire:submit.prevent="submitForm">
    @if ($message)
        <div class="alert alert-success my-2">
            {{ $message }}
        </div>
    @endif
    <div class="mb-3">
        <label for="name">Name*</label>
        <input type="text" class="form-control" wire:model="name" />
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email">Email address*</label>
        <input type="email" class="form-control" wire:model="email" />
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="question">Question*</label>
        <textarea class="form-control" wire:model="question"></textarea>
        @error('question')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">
        <span wire:target="submitForm" wire:loading.remove>Send</span>
        <span wire:target="submitForm" wire:loading>Sending...</span>
    </button>
</form>
