@php
    $attributes ??= [];
    $attributesString = '';

    foreach ($attributes as $key => $attribute) {
        $attribute = e($attribute);
        $attributesString .= " {$key}=\"{$attribute}\"";
    }

    $id = 'form-' . str_replace(['[', ']'], [null, '_'], $name);
    $error = $errors->first($name);
    $value = old($name, $value ?? null);
    $view = $type;
    $classes ??= null;

    $classes = function ($default = 'form-control') use ($classes, $error) {
        return ($classes ?: $default) . ($error ? ' is-invalid' : '');
    };
    
    if (in_array($type, ['text', 'email', 'password', 'tel', 'number'])) {
        $view = 'text';
    }
@endphp

@if($label ?? null)
    @component('components.form.label')
        @slot('id', $id)
        @slot('label', $label)
        @slot('description', $description ?? null)
    @endcomponent
@endif

@if (($prepend ?? null) || ($append ?? null))
<div class="input-group">
    @if ($prepend ?? null)
        <div class="input-group-prepend">
            <span class="input-group-text">{{ $prepend }}</span>
        </div>
    @endif
    @include("components.form.{$view}")
    @if ($append ?? null)
        <div class="input-group-append">
            <span class="input-group-text">{{ $append }}</span>
        </div>
    @endif
</div>
@else
@include("components.form.{$view}")
@endif

@error($name)
    <span class="invalid-feedback d-block">{{ $message }}</span>
@enderror