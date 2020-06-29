<label for="{{ $id }}">
    {{ $label }}
    @if ($description)
        <span class="small d-block text-muted">{{ $description }}</span>
    @endif    
</label>