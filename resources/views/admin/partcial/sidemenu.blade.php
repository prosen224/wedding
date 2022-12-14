<li class="nav-item @if($conName[1] == 'dashboard') active @endif">
    <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fas fa-fw fa-home"></i>
        <span>Dashboard</span>

    </a>
</li>

<!-- General Settings -->
@php if( in_array('General Settings', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'setting' && $conName[2] == 'general') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting" aria-expanded="true" aria-controls="collapseSetting">
        <i class="fas fa-cog"></i>
        <span>General Settings</span>
    </a>
    <div id="collapseSetting" class="collapse @if($conName[1] == 'setting' && $conName[2] == 'general') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item @if($conName[3] == 'logo') active @endif" href="{{ route('admin.general_setting.logo') }}">Logo</a>
            <a class="collapse-item @if($conName[3] == 'favicon') active @endif" href="{{ route('admin.general_setting.favicon') }}">Favicon</a>
            <a class="collapse-item @if($conName[3] == 'loginbg') active @endif" href="{{ route('admin.general_setting.loginbg') }}">Login Background</a>
            <a class="collapse-item @if($conName[3] == 'topbar') active @endif" href="{{ route('admin.general_setting.topbar') }}">Top Bar</a>
            <a class="collapse-item @if($conName[3] == 'banner') active @endif" href="{{ route('admin.general_setting.banner') }}">Banner</a>
            <a class="collapse-item @if($conName[3] == 'footer') active @endif" href="{{ route('admin.general_setting.footer') }}">Footer</a>
            <a class="collapse-item @if($conName[3] == 'sidebar') active @endif" href="{{ route('admin.general_setting.sidebar') }}">Sidebar</a>
            <a class="collapse-item @if($conName[3] == 'color') active @endif" href="{{ route('admin.general_setting.color') }}">Color</a>
            <a class="collapse-item @if($conName[3] == 'preloader') active @endif" href="{{ route('admin.general_setting.preloader') }}">Preloader</a>
            <a class="collapse-item @if($conName[3] == 'stickyheader') active @endif" href="{{ route('admin.general_setting.stickyheader') }}">Sticky Header</a>
            <a class="collapse-item @if($conName[3] == 'googleanalytic') active @endif" href="{{ route('admin.general_setting.googleanalytic') }}">Google Analytic</a>
            <a class="collapse-item @if($conName[3] == 'googlerecaptcha') active @endif" href="{{ route('admin.general_setting.googlerecaptcha') }}">Google Recaptcha</a>
            <a class="collapse-item @if($conName[3] == 'tawklivechat') active @endif" href="{{ route('admin.general_setting.tawklivechat') }}">Tawk Live Chat</a>
            <a class="collapse-item @if($conName[3] == 'cookieconsent') active @endif" href="{{ route('admin.general_setting.cookieconsent') }}">Cookie Consent</a>
        </div>
    </div>
</li>
@endif


<!-- Page Settings -->
@php if( in_array('Page Settings', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'page') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePageSettings" aria-expanded="true" aria-controls="collapsePageSettings">
        <i class="fas fa-paste"></i>
        <span>Page Settings</span>
    </a>
    <div id="collapsePageSettings" class="collapse @if($conName[1] == 'page') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item @if($conName[2] == 'home') active @endif" href="{{ route('admin.page_home.edit') }}">Home</a>
            <a class="collapse-item @if($conName[2] == 'about') active @endif" href="{{ route('admin.page_about.edit') }}">About</a>
            <a class="collapse-item @if($conName[2] == 'service') active @endif" href="{{ route('admin.page_service.edit') }}">Service</a>
            <a class="collapse-item @if($conName[2] == 'clients') active @endif" href="{{ route('admin.page_clients.edit') }}">Clients</a>
            <a class="collapse-item @if($conName[2] == 'shop') active @endif" href="{{ route('admin.page_shop.edit') }}">Shop</a>
            <a class="collapse-item @if($conName[2] == 'blog') active @endif" href="{{ route('admin.page_blog.edit') }}">Blog</a>
            <a class="collapse-item @if($conName[2] == 'project') active @endif" href="{{ route('admin.page_project.edit') }}">Project</a>
            <a class="collapse-item @if($conName[2] == 'faq') active @endif" href="{{ route('admin.page_faq.edit') }}">FAQ</a>
            <a class="collapse-item @if($conName[2] == 'team') active @endif" href="{{ route('admin.page_team.edit') }}">Team Member</a>
            <a class="collapse-item @if($conName[2] == 'photo-gallery') active @endif" href="{{ route('admin.page_photo_gallery.edit') }}">Photo Gallery</a>
            <a class="collapse-item @if($conName[2] == 'video-gallery') active @endif" href="{{ route('admin.page_video_gallery.edit') }}">Video Gallery</a>
            <a class="collapse-item @if($conName[2] == 'contact') active @endif" href="{{ route('admin.page_contact.edit') }}">Contact</a>
            <a class="collapse-item @if($conName[2] == 'career') active @endif" href="{{ route('admin.page_career.edit') }}">Career</a>
            <a class="collapse-item @if($conName[2] == 'term') active @endif" href="{{ route('admin.page_term.edit') }}">Term</a>
            <a class="collapse-item @if($conName[2] == 'privacy') active @endif" href="{{ route('admin.page_privacy.edit') }}">Privacy</a>
            <a class="collapse-item @if($conName[2] == 'other') active @endif" href="{{ route('admin.page_other.edit') }}">Other</a>
        </div>
    </div>
</li>
@endif



<!-- Admin Users Section -->
@php if( in_array('Admin User Section', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'role' || $conName[1] == 'admin-user') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdminUser" aria-expanded="true" aria-controls="collapseAdminUser">
        <i class="fas fa-user-secret"></i>
        <span>Admin User Section</span>
    </a>
    <div id="collapseAdminUser" class="collapse @if($conName[1] == 'role' || $conName[1] == 'admin-user') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.role.index') }}">Roles</a>
            <a class="collapse-item" href="{{ route('admin.role.user') }}">Users</a>
        </div>
    </div>
</li>
@endif



<!-- Footer Columns -->
@php if( in_array('Footer Columns', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'footer') active @endif">
    <a class="nav-link" href="{{ route('admin.footer.index') }}">
        <i class="fas fa-fw fa-list-alt"></i>
        <span>Footer Columns</span>
    </a>
</li>
@endif




<!-- Sliders -->
@php if( in_array('Sliders', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'slider') active @endif">
    <a class="nav-link" href="{{ route('admin.slider.index') }}">
        <i class="fas fa-sliders-h"></i>
        <span>Sliders</span>
    </a>
</li>
@endif



<!-- Blog Section -->
@php if( in_array('Blog Section', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'category' || $conName[1] == 'blog' || $conName[1] == 'comment') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true" aria-controls="collapseBlog">
        <i class="fas fa-cubes"></i>
        <span>Blog Section</span>
    </a>
    <div id="collapseBlog" class="collapse @if($conName[1] == 'category' || $conName[1] == 'blog' || $conName[1] == 'comment') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.category.index') }}">Categories</a>
            <a class="collapse-item" href="{{ route('admin.blog.index') }}">Blogs</a>
            <a class="collapse-item" href="{{ route('admin.comment.approved') }}">Approved Comments</a>
            <a class="collapse-item" href="{{ route('admin.comment.pending') }}">Pending Comments</a>
        </div>
    </div>
</li>
@endif



<!-- Dynamic Pages -->
@php if( in_array('Dynamic Pages', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'dynamic-page') active @endif">
    <a class="nav-link" href="{{ route('admin.dynamic_page.index') }}">
        <i class="fas fa-cube"></i>
        <span>Dynamic Pages</span>
    </a>
</li>
@endif

<!-- Menu Manage -->
@php if( in_array('Menu Manage', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'menu') active @endif">
    <a class="nav-link" href="{{ route('admin.menu.index') }}">
        <i class="fas fa-bars"></i>
        <span>Menu Manage</span>
    </a>
</li>
@endif

<!-- Project -->
@php if( in_array('Project', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'project') active @endif">
    <a class="nav-link" href="{{ route('admin.project.index') }}">
        <i class="fas fa-umbrella"></i>
        <span>Project</span>
    </a>
</li>
@endif

<!-- Career Section -->
@php if( in_array('Career Section', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'job' || $conName[1] == 'job-application') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCareer" aria-expanded="true" aria-controls="collapseCareer">
        <i class="fas fa-user-secret"></i>
        <span>Career Section</span>
    </a>
    <div id="collapseCareer" class="collapse @if($conName[1] == 'job' || $conName[1] == 'job-application') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.job.index') }}">Jobs</a>
            <a class="collapse-item" href="{{ route('admin.job.view_application') }}">Job Applications</a>
        </div>
    </div>
</li>
@endif


<!-- Photo Gallery -->
@php if( in_array('Photo Gallery', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'photo-gallery') active @endif">
    <a class="nav-link" href="{{ route('admin.photo.index') }}">
        <i class="fas fa-camera"></i>
        <span>Photo Gallery</span>
    </a>
</li>
@endif

<!-- Video Gallery -->
@php if( in_array('Video Gallery', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'video-gallery') active @endif">
    <a class="nav-link" href="{{ route('admin.video.index') }}">
        <i class="fas fa-video"></i>
        <span>Video Gallery</span>
    </a>
</li>
@endif

<!-- Product Section -->
@php if( in_array('Product Section', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'product' || $conName[1] == 'shipping' || $conName[1] == 'coupon') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
        <i class="fas fa-shopping-cart"></i>
        <span>Product Section</span>
    </a>
    <div id="collapseProduct" class="collapse @if($conName[1] == 'product' || $conName[1] == 'shipping' || $conName[1] == 'coupon') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.product.index') }}">Product</a>
            <a class="collapse-item" href="{{ route('admin.shipping.index') }}">Shipping</a>
            <a class="collapse-item" href="{{ route('admin.coupon.index') }}">coupon</a>
        </div>
    </div>
</li>
@endif

<!-- Order -->
@php if( in_array('Order Section', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'order') active @endif">
    <a class="nav-link" href="{{ route('admin.order.index') }}">
        <i class="fas fa-bookmark"></i>
        <span>Order Section</span>
    </a>
</li>
@endif

<!-- Customer -->
@php if( in_array('Customer Section', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'customer') active @endif">
    <a class="nav-link" href="{{ route('admin.customer.index') }}">
        <i class="fas fa-users"></i>
        <span>Customer Section</span>
    </a>
</li>
@endif

<!-- Why Choose Us -->
@php if( in_array('Why Choose Us', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'why-choose') active @endif">
    <a class="nav-link" href="{{ route('admin.why_choose.index') }}">
        <i class="fas fa-arrows-alt"></i>
        <span>Why Choose Us</span>
    </a>
</li>
@endif

<!-- Services -->
@php if( in_array('Service', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'service') active @endif">
    <a class="nav-link" href="{{ route('admin.service.index') }}">
        <i class="fas fa-certificate"></i>
        <span>Service</span>
    </a>
</li>
@endif

<!-- Testimonials -->
@php if( in_array('Testimonial', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'testimonial') active @endif">
    <a class="nav-link" href="{{ route('admin.testimonial.index') }}">
        <i class="fas fa-award"></i>
        <span>Testimonial</span>
    </a>
</li>
@endif

<!-- Team Members -->
@php if( in_array('Team Member', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'team-member') active @endif">
    <a class="nav-link" href="{{ route('admin.team_member.index') }}">
        <i class="fas fa-user-plus"></i>
        <span>Team Member</span>
    </a>
</li>
@endif

<!-- FAQ -->
@php if( in_array('FAQ', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'faq') active @endif">
    <a class="nav-link" href="{{ route('admin.faq.index') }}">
        <i class="fas fa-question-circle"></i>
        <span>FAQ</span>
    </a>
</li>
@endif
<!-- Clients -->
<li class="nav-item @if($conName[1] == 'clients') active @endif">
    <a class="nav-link" href="{{ route('admin.clients.index') }}">
        <i class="fas fa-mug-hot"></i>
        <span>Clients</span>
    </a>
</li>

<!-- Email Template -->
@php if( in_array('Email Template', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'email-template') active @endif">
    <a class="nav-link" href="{{ route('admin.email_template.index') }}">
        <i class="fas fa-envelope"></i>
        <span>Email Template</span>
    </a>
</li>
@endif

<!-- Subscriber -->
@php if( in_array('Subscriber Section', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'subscriber') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubscriber" aria-expanded="true" aria-controls="collapseSubscriber">
        <i class="fas fa-share-alt-square"></i>
        <span>Subscriber Section</span>
    </a>
    <div id="collapseSubscriber" class="collapse @if($conName[1] == 'subscriber') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.subscriber.index') }}">All Subscribers</a>
            <a class="collapse-item" href="{{ route('admin.subscriber.send_email') }}">Send Email to Subscribers</a>
        </div>
    </div>
</li>
@endif

<!-- Social Media -->
@php if( in_array('Social Media', $arr_one) || session('role_id')==1 ): @endphp
<li class="nav-item @if($conName[1] == 'social-media') active @endif">
    <a class="nav-link" href="{{ route('admin.social_media.index') }}">
        <i class="fas fa-basketball-ball"></i>
        <span>Social Media</span>
    </a>
</li>
@endif