@csrf
<div>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ $student->name }}" />
</div>

<div>
    <label for="email">Email</label>
    <input type="text" id="email" name="email" value="{{ $student->email }}" />
    </textarea>
    @error('email')
        <div class = "alert alert-danger">{{ $message }}</div>
    @enderror
</div>