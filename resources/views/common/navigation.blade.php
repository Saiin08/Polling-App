<nav>
  <a href="/" class="{{$current_page == 'home' ? 'hilighted' : ''}}">Home</a>

  @auth 
    <form action="{{ route('logout') }}" method="post">
   
      @csrf
      <button>Logout</button>
    </form>
    @else 
    <a href="/register" class="{{$current_page=='register'?'highlited':''}}">Register</a>
    <a href="/login" class="{{$current_page=='login'?'highlited':''}}">Login</a>
  @endauth

</nav>