<div class="form-group">
    <label class="control-label">{{ __('Title') }}</label>
    <input
        class="form-control"
        name="title"
        type="text"
        value="{{ Arr::get($attributes, 'title') }}"
        placeholder="{{ __('Title') }}"
    >
</div>

<div class="form-group">
    <label class="control-label">{{ __('Subtitle') }}</label>
    <input
        class="form-control"
        name="subtitle"
        type="text"
        value="{{ Arr::get($attributes, 'subtitle') }}"
        placeholder="{{ __('Subtitle') }}"
    >
</div>

<div class="form-group">
    <label class="control-label">Time</label>
    <input
        class="form-control"
        name="time"
        type="text"
        value="{{ Arr::get($attributes, 'time') }}"
        placeholder="Time"
    >
</div>

<div class="form-group">
    <label class="control-label">{{ __('Connect social networks title') }}</label>
    <input
        class="form-control"
        name="social_title"
        type="text"
        value="{{ Arr::get($attributes, 'social_title') }}"
        placeholder="{{ __('Connect social networks title') }}"
    >
</div>

<div class="form-group">
    <label class="control-label">{{ __('Image') }}</label>
    {!! Form::mediaImage('image', Arr::get($attributes, 'image')) !!}
</div>
