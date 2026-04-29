@foreach($projects as $project)
    <div>
        <h2>{{ $project->title }}</h2>
        <p>{{ $project->description }}</p>

        @if($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" width="200">
        @endif
    </div>
@endforeach
