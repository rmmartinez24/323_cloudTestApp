<h1>Users</h1>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>
        <a href="{{ route('users.edit', $user->id) }}">Edit</a>
        <a href="{{ route('users.show', $user->id) }}">Show</a>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
