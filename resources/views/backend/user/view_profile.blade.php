@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-info">
                            <h3 class="widget-user-username">{{ $user->name }}</h3>
                            <h6 class="widget-user-desc">{{ $user->usertype }}</h6>
                            <a href="{{ route('profile.edit') }}" style="float: right;" class="btn btn-secondary btn-rounded">Edit Profile</a>
                            <h6 class="widget-user-desc">{{ $user->email }}</h6>
                        </div>
                        <div class="widget-user-image">
                            <img class="rounded-circle" src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image) : url('upload/no_image.jpg') }}" alt="User Avatar">
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $user->mobile}}</h5>
                                        <span class="description-text">Mobile</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 br-1 bl-1">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $user->address }}</h5>
                                        <span class="description-text">Address</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $user->gender }}</h5>
                                        <span class="description-text">Gender</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
</div>
@endsection