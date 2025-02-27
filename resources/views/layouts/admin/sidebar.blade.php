<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/" target="_blank">FATHFORCE</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">FFSK</a>
          </div>
          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ route('home') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Dashboard
            </a>
                <ul class="sidebar-menu">
                    {{-- <li><a class="nav-link" href="{{ route('todo.index') }}"><i class="fas fa-calendar"></i> <span>To Do</span></a></li> --}}
                    <li>
                            <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Article</span></a>
                            <ul class="dropdown-menu" style="display: none;">
                                @if(Auth::user()->role == 'admin')
                                <li class="active"><a class="nav-link" href="{{ route('category.index') }}">Category</a></li>
                                @endif
                                <li class="active"><a class="nav-link" href="{{ route('post.index') }}">Post</a></li>
                                <li class="active"><a class="nav-link" href="{{ route('comments.index') }}">Comments</a></li>
                            </ul>
                            </li>
                    </li>
                    @if(Auth::user()->role == 'admin')
                    <li>
                        <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-desktop"></i> <span>Media</span></a>
                        <ul class="dropdown-menu" style="display: none;">
                            <li class="active"><a class="nav-link" href="{{ route('album.index') }}">Albums</a></li>
                            <li class="active"><a class="nav-link" href="{{ route('gallery.index') }}">Gallery</a></li>
                        </ul>
                        </li>
                </li>
                    <li><a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-user"></i> <span>Manage User</span></a></li>
                    {{-- <li><a class="nav-link" href="{{ route('setting.index')}}"><i class="fas fa-cogs"></i> <span>Settings</span></a></li> --}}
                    @endif
                    <li><a class="nav-link" href="{{ route('about.credit')}}"><i class="fas fa-fire"></i> <span>Credits</span></a></li>
                </ul>
        </aside>
      </div>
