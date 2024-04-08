# laravel-login-fetch-api
add @csrf on your form
<form>
  @csrf
  ...
</form>

add csrf on equest body
body: JSON.stringify({
    "_token": "{{ csrf_token() }}",
    "email": user,
    "password": password
})
