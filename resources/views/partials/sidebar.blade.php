        <div id="sidebar">
            <div class="d-block">
                <!-- <h3 class="float-left text-read pt-1 pl-3 mb-0">Admin</h3>                     -->
                <a href="javscript:;" class="text-dark" data-toggle=".fill" id="sidebar-toggle"> 
                        <i class="la la-ellipsis-h la-2x"></i>
                </a>                                
            </div>
            <ul class="pb-5 pl-4 admin-menu dekstop-menu">
                
                <h5 class="text-dark pt-1 pl-6 mb-4">
                    <img src="{{asset('admin/images/ic_sepatu.png')}}"/>
                    {{config('app.name')}}
                </h5>                                        
                <li data-sidebar="dashboard"><a class="py-3 px-3" href="{{url('home')}}"><i class="la la-navicon"></i><span>Dashboard</span></a></li>
                <li data-sidebar="widgets"><a class="py-3 px-3" href="{{url('categories')}}"><i class="la la-th"></i><span>Category</span></a></li>
                <li data-sidebar="charts"><a class="py-3 px-3" href="{{url('services')}}"><i class="la la-desktop"></i><span>Service</span></a></li>
                <li data-sidebar="elements"><a class="py-3 px-3" href="{{url('orders')}}"><i class="la la-pencil-square"></i><span>Orders</span></a></li>
                <li data-sidebar="forms"><a class="py-3 px-3" href="{{url('earnings')}}"><i class="la la-bar-chart"></i><span>Earnings</span></a></li>
                <li data-sidebar="tables"><a class="py-3 px-3" href="{{url('customers')}}"><i class="la la-users"></i><span>Customers</span></a></li>
                <li data-sidebar="setting"><a class="py-3 px-3" href="{{url('settings')}}"><i class="la la-gears"></i><span>Settings</span></a></li>
            </ul>
        </div>