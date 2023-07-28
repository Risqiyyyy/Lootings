@extends('layouts.header')

@section('content')
<div>
    @include('sweetalert::alert')
    <!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed ">
        @include('layouts.navbar')
        @include('layouts.sidebar')
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN breadcrumb -->
			<ol class="breadcrumb float-xl-end">
				<li class="breadcrumb-item"><a href="javascript:;">Pages</a></li>
				<li class="breadcrumb-item active">Vm</li>
			</ol>
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">VM</h1>
			<!-- END page-header -->


            {{-- modal --}}
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Data</button>
            
            <div class="modal fade m-3" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data VM</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ route('vm.store') }}">
                        @csrf
                    <div class="modal-body">
                        <div class="row g-2 mb-3">
                            <div class="col-md">
                                <label for="floatingInputGrid">VM NAME</label>
                                <input type="text" name="vm_name" class="form-control" placeholder="..." >
                            </div>
                            <div class="col-md">
                                <label for="floatingInputGrid">VM ETHERNET</label>
                                <input type="text" name="vm_ethernet" class="form-control" placeholder="..." >
                            </div>
                        </div>
                        
                        <div class="row g-2 mb-3">
                            <div class="col-md">
                                <label for="floatingInputGrid">VM IP</label>
                                <input type="text" name="vm_ip" class="form-control" placeholder="..." >
                            </div>
                            <div class="col-md">
                                <label for="floatingInputGrid">VM GATEWAY</label>
                                <input type="text" name="vm_gateway" class="form-control" placeholder="..." >
                            </div>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-md">
                                <label for="floatingInputGrid">VM NAMESERVER</label>
                                <input type="text" name="vm_name_server" class="form-control" placeholder="..." >
                            </div>
                            <div class="col-md">
                                <label for="floatingInputGrid">VM VLAN</label>
                                <input type="text" name="vm_vlan" class="form-control" placeholder="..." >
                            </div>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-md">
                                <label for="floatingInputGrid">VM HOST</label>
                                <input type="text" name="vm_host" class="form-control" placeholder="..." >
                            </div>
                            <div class="col-md">
                                <label for="floatingInputGrid">VM HOSTNAME</label>
                                <input type="text" name="vm_hostname" class="form-control" placeholder="...">
                            </div>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-md">
                                <label for="floatingInputGrid">VM OS</label>
                                <input type="text" name="vm_os" class="form-control" placeholder="...">
                            </div>
                            <div class="col-md">
                                <label for="floatingInputGrid">VM KERNEL</label>
                                <input type="text" name="vm_kernel" class="form-control" placeholder="...">
                            </div>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-md">
                                <select class="form-select">
                                    <option selected disabled hidden>Tunel</option>
                                    @foreach ($tunel_provider as $t)
                                    <option value="{{ $t->tpr_id }}">{{ $t->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <label class="form-label">NOTE</label>
                        <input class="form-control mb-3" name="note" placeholder="...">

                        
                        @if ($t->tpr_id == "1")
                            <label class="form-label">NOTE</label>
                            <input class="form-control mb-3" name="note" placeholder="...">
                        @endif

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
            {{-- end modal --}}

            <div class="col-xl">
                <!-- BEGIN panel -->
                <div class="panel panel-inverse">
                    <!-- BEGIN panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Data VM</h4>
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
                                    <th width="1%">NO</th>
                                    <th class="text-nowrap">VM NAME</th>
                                    <th class="text-nowrap">VM ETHERNET</th>
                                    <th class="text-nowrap">VM IP</th>
                                    <th class="text-nowrap">VM GATEWAY</th>
                                    <th class="text-nowrap">VM NAMESERVER</th>
                                    <th class="text-nowrap">VM VLAN</th>
                                    <th class="text-nowrap">VM HOST</th>
                                    <th class="text-nowrap">VM HOSTNAME</th>
                                    <th class="text-nowrap">VM OS</th>
                                    <th class="text-nowrap">VM KERNEL</th>
                                    <th class="text-nowrap">NOTE</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vm as $v)
                                <tr class="odd gradeX">
                                    <td width="1%" class="fw-bold text-dark">{{ ++$i }}</td>
                                    <td>{{ $v->vm_name }}</td>
                                    <td>{{ $v->vm_ethernet }}</td>
                                    <td>{{ $v->vm_ip }}</td>
                                    <td>{{ $v->vm_gateway }}</td>
                                    <td>{{ $v->vm_name_server }}</td>
                                    <td>{{ $v->vm_vlan }}</td>
                                    <td>{{ $v->vm_host }}</td>
                                    <td>{{ $v->vm_hostname }}</td>
                                    <td>{{ $v->vm_os }}</td>
                                    <td>{{ $v->vm_kernel }}</td>
                                    <td>{{ $v->note }}</td>
                                    <td> 
                                        <form action="{{ route('vm.destroy',$v->vm_id) }}" method="POST">
                                        {{-- <a class="btn btn-primary" href="{{ route('vm.edit',$v->vm_id) }}">Edit</a> --}}
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                      </form>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $vm->links() !!}
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
