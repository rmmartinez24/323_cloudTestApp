<!-- Edit User Form -->
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $user->name }}" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ $user->email }}" required>

    <button type="submit">Update User</button>
</form>
