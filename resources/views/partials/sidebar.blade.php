@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('quickadmin.qa_student_management')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('role_access')
                    <li>
                        <a href="{{ route('student.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('module.student.title')</span>
                        </a>
                    </li>
                    @endcan
                    
                    @can('user_access')
                    <li>
                        <a href="{{ route('studentEvaluation') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('module.student.evaluation')</span>
                        </a>
                    </li>
                    @endcan

                    @can('user_access')
                    <li>
                        <a href="{{ route('primary_admission') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('module.student.primary_admission')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan


            @can('user_management_access')
            <li class="{{ $request->segment(1) == 'center' ? 'active' : '' }}">
                <a href="{{ route('teacher.index') }}">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.qa_teacher_management')</span>
                </a>
            </li>
            @endcan

            @can('user_management_access')
            <li class="{{ $request->segment(1) == 'center' ? 'active' : '' }}">
                <a href="{{ route('admin.centers.index') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_center_management')</span>
                </a>
            </li>
            @endcan

            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('quickadmin.qa-visit-center')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    
                    @can('user_access')
                    <li>
                        <a href="{{ route('centervisit.index')}}">
                            <i class="fa fa-user"></i>
                            <span>@lang('quickadmin.qa-visit-center-create')</span>
                        </a>
                    </li>
                    @endcan

                    @can('user_access')
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>@lang('quickadmin.qa-visit-center-view')</span>
                        </a>
                    </li>
                    @endcan
                    
                </ul>
            </li>@endcan

            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('role_access')
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('quickadmin.roles.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('quickadmin.users.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            

            

            



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

