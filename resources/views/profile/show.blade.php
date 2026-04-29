<h1>{{ $user->name }}</h1>

<p>{{ $user->profile->bio ?? '' }}</p>

@if($user->profile && $user->profile->avatar)
    <img src="{{ asset('storage/' . $user->profile->avatar) }}" width="150">
@endif

@foreach($user->projects as $project)
    <div>
        <h2>{{ $project->title }}</h2>
        <p>{{ $project->description }}</p>

        @if($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" width="200">
        @endif
    </div>
@endforeach
