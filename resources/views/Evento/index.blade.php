@foreach($evento as $eventos)
    <div>
        <h3>{{ $eventos->title }}</h3>
        <p>{{ $eventos->local }}</p>
        <p>{{ $eventos->description }}</p>
        <a href="{{ url('evento/'.$eventos->id.'/edit') }}">Edit</a>
        <form action="{{ url('evento/'.$eventos->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
