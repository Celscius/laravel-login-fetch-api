# laravel-login-fetch-api
add @csrf on your form blade
```
<form>
  @csrf
  ...
</form>
```
add csrf on your request body blade script
```
body: JSON.stringify({
    "_token": "{{ csrf_token() }}",
    "email": user,
    "password": password
})
```
