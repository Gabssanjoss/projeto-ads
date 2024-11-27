<form action="{{ url('evento') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title" required>
    <input type="text" name="local" placeholder="Local" required>
    <input type="text" name="description" placeholder="Description" required>
    <button type="submit">Create Evento</button>
</form>

