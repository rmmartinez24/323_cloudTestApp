<!-- Create User Form -->
<h1>Create User</h1>
<form method="POST" action="{{ route('users.store') }}">
  @csrf
  <label for="name">Name:</label>
  <input type="text" name="name" required>
  
  <label for="email">Email:</label>
  <input type="email" name="email" required>
  
  <label for="password">Password:</label>
  <input type="password" name="password" required>
  
  <button type="submit">Create User</button>
</form>
