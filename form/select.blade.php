<select id="{{ $id }}" name="{{ $name }}" class="{{ $classes('custom-select') }}"{!! $attributesString !!}>
    <option value="" selected disabled>Bir öğe seçin</option>
    @foreach ($options as $key => $option)
        <option value="{{ $key }}"{{ in_array($key, Arr::wrap($value)) ? ' selected' : '' }}>{{ $option }}</option>
    @endforeach
</select>