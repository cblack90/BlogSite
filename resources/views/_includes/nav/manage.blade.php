<div class="side-menu">
    <aside class="menu m-t-30 m-l-10"> 
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <li><a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">Dashboard</a></li>
        </ul>
        <p class="menu-label">
            Content
        </p>
        <ul class="menu-list">
            <li><a href="{{route('posts.index')}}" class="{{Nav::isResource('posts',2)}}">Blog Admin</a></li>
            <li><a href="#" class="{{Nav::isRoute('')}}">Resource Admin</a></li>
        </ul>
    </aside>
</div>