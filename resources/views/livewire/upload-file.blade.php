<div class="card mt-2">
    <div class="card-header" style="background-color: cornflowerblue;color:white">
        Upload File
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form wire:submit='upload'>
            @csrf
            <div class="mb-3">
                <label class="form-label">Select File</label>
                <input wire:model="file" name="file" id="file" type="file" class="form-control">
                @error('file')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-block">Upload</button>
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success mt-3">
                    {{ session('message') }}
                </div>
            @endif
        </form>
    </div>
</div>
