 <div class="sidebar"  data-image="{{asset('backend/img/sidebar-1.jpg')}}">
   
      <div class="logo">
        <a href="{{ URL('admin/dashboard') }}" class="simple-text logo-normal">
          Admin Pannel
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('admin/dashboard*') ? 'active': '' }}">
                <a href="{{ URL('admin/dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/slider*') ? 'active': '' }}">
                <a href="{{ route('slider.index') }}">
                    <i class="material-icons">chrome_reader_mode</i>
                    <p>Sliders</p>
                </a>
            </li>
         <li class="{{ Request::is('admin/category*') ? 'active': '' }}">
                <a href="{{ route('category.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Category</p>
                </a>
            </li>
          <li class="{{ Request::is('admin/item*') ? 'active': '' }}">
                <a href="{{ route('item.index') }}">
              <i class="material-icons">library_books</i>
              <p>Item</p>
            </a>
          </li>
          <li class="{{ Request::is('admin/reservation*') ? 'active': '' }}">
                <a href="{{ route('reservation.index') }}">
              <i class="material-icons">bubble_chart</i>
              <p>Reservation</p>
            </a>
          </li>
            <li class="{{ Request::is('admin/contact*') ? 'active': '' }}">
                <a href="{{ route('contact.index') }}">
                    <i class="material-icons">message</i>
                    <p>Contact Message</p>
                </a>
            </li>
         
        </ul>
      </div>
    </div>
     