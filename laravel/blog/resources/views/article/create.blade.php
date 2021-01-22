<form action= "{{route('bai-viet.store')}}" method ="POST">
@csrf
    <div>
        <label for="title">Tiêu đề bài viết</label>
        <input type="text" name = "title">
        <div>
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div>
        <label for="content">Nội dung</label>
        <!-- <input type="text" name = "content"> -->
        <textarea cols = "25" rows ="8" name = "content"></textarea>
        <div>
            @error('content')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div>
        <button type ="submit">create</button>
    </div>
</form>