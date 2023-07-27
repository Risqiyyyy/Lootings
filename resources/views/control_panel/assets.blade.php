@extends('layouts.header')

@section('content')
<div>
    <!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed ">
        @include('layouts.navbar')
        @include('layouts.sidebar')
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN breadcrumb -->
			<ol class="breadcrumb float-xl-end">
				<li class="breadcrumb-item"><a href="javascript:;">Pages</a></li>
				<li class="breadcrumb-item active">Assets</li>
			</ol>
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">Assets</h1>
			<!-- END page-header -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Data</button>
            {{-- modal --}}
            <div class="modal fade m-3" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
                </div>
            </div>
            
            {{-- end modal --}}
            <div class="col-xl">
                <!-- BEGIN panel -->
                <div class="panel panel-inverse">
                    <!-- BEGIN panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">DataTable - Fixed Header</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <!-- END panel-heading -->
                
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <table id="data-table-fixed-header" class="table table-striped table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th width="1%">&nbsp;</th>
                                    <th width="1%" data-orderable="false"></th>
                                    <th class="text-nowrap">Rendering engine</th>
                                    <th class="text-nowrap">Browser</th>
                                    <th class="text-nowrap">Platform(s)</th>
                                    <th class="text-nowrap">Engine version</th>
                                    <th class="text-nowrap">CSS grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td width="1%" class="fw-bold text-dark">1</td>
                                    <td width="1%"><img src="../assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>X</td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                    <!-- END panel-body -->
                    
                </div>
                <!-- END panel -->
            </div>
		</div>
		<!-- END #content -->

		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>

</div>
<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>
@endsection
