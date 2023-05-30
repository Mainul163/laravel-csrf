<form action="{{url('about')}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <input type="text" name="name" placeholder="write your name"><br>
    <input type="email" name="email" placeholder="write your email"><br><br>
    <button type="submit">Submit</button>
</form>

<a href="{{url('/')}}"> Back TO Home</a>