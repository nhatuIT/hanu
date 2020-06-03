@csrf
<div>
    <label for="title">Title</label>
    <input type="text" id="title" name="title" value="{{ $post->title }}" />
</div>

<div>
    <label for="description">Description</label>
    <input type="text" id="description" name="description" value="{{ $post->description }}" />
    </textarea>
    @error('description')
        <div class = "alert alert-danger">{{ $message }}</div>
    @enderror
</div>