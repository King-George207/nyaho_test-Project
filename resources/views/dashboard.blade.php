<x-app-layout>
  <!-- Main content -->
  <div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Patient Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Patient Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-md-4">
                <div class="card bg-primary bg-soft">
                    <div>
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-3">
                                      <p> Hello {{Auth::user()->name}}!</p>
                                    <h5 class="text-primary">Welcome to <strong>Nyaho</strong> Patient Portal !</h5>
                                   

                                    <ul class="ps-3 mb-0">
                                        <li class="py-1">&nbsp;</li>
                                        <li class="py-1">&nbsp;</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-4">
                      
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                            <i class="bx bx-copy-alt"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">..</h5>
                                </div>
                                <div class="text-muted mt-4">
                                    <h4>0 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                    <div class="d-flex">
                                        <span class="badge badge-soft-primary font-size-12"> My Lab tests </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-sm-4">
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title rounded-circle bg-success bg-soft text-success font-size-18">
                                            <i class="bx bx-archive-in"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">..</h5>
                                </div>
                                <div class="text-muted mt-4">
                                    <h4>0<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                    <div class="d-flex">
                                        <span class="badge badge-soft-success font-size-12">My Vital Checkings </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                   
                </div>
                <!-- end row -->
            </div>
        </div>

        <!-- end row -->


    </div> <!-- container-fluid -->
</div>
<!-- /.content -->
</x-app-layout>
