<form action="{{ url('evento/'.$evento->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" placeholder="Title" value="{{ $evento->title }}" required>
    <input type="text" name="local" placeholder="Local" value="{{ $evento->type }}" required>
    <input type="text" name="description" placeholder="Description" value="{{ $evento->description }}" required>
    <button type="submit">Update Evento</button>
</form>


