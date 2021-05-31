<div>
    <form wire:submit.prevent="insert">
        <input type="text" class="form-control" wire:model="description" />
        @error('description') <span class="error">{{ $message }}</span> @enderror
        <div class="d-grid gap-2 mt-2">
            <button class="btn btn-primary">Inserir</button>
        </div>
    </form>
    <div>
        <ul>
        @forelse($posts as $post)
            <li>{{$post->description}}</li>
        @empty
        <div class="mt-3">Nenhum registro inserido</div>
        @endforelse
        </ul>
    </div>
</div>