
  <div class="card mt-2">
            <div class="card-header" style="background-color: purple;color: white">
                Uploaded Files
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @if (count($files) < 0)
                        <li class="list-group-item">No files uploaded yet.</li>
                    @else
                        @foreach ($files as $file)
                            
                                <li class="list-group-item">
                                    <a href="{{ asset('storage/uploads/files/'.$file->path) }}">{{ $file->name }}</a>
                                </li>
                            
                        @endforeach
                    @endif
                </ul>
                 @if (count($files) > 0)
                 {{ $files->links() }}
                 @endif
            </div>
        </div>

