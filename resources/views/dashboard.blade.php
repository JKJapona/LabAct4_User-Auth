@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Welcome, {{ auth()->user()->name }}!</h1>
<p>You are logged in as {{ auth()->user()->email }}</p>
 
 
<form method="POST" action="/logout">
    @csrf
    <button type="submit">Logout</button>
</form>