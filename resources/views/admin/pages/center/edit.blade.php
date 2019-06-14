@extends('admin.layouts.master') 
@section('title')
المراكز 
@endsection
@section('content')
<!-- Content page Start -->
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="box transparent">
					<div class="box-header border">
						<h3 class="box-title"><span class="semi-bold">تعديل بيانات المركز</span></h3>
						<div class="box-tools pull-right"> <a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse"><i class="fa fa-chevron-down fa-minus"></i></a>
							<a class="btn btn-box-tool"><i class="fa fa-repeat"></i></a>
							<a class="btn btn-box-tool"><i class="fa fa-cog"></i></a>
							<a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<br>
					<div class="box-body" style="display: block;">
						<form class="form-1 fl-form" action="{{route('admin.centers.edit' , ['id' => $center->id])}}" enctype="multipart/form-data" method="post" onsubmit="return false;">{{ csrf_field() }}
							<div class="row form-row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="input-1">اسم المركز</label>
										<input name="name" value="{{$center->center_name}}" class="form-control" id="input-1" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="input-2">اسم المشرف</label>
										<input name="manager" value="{{$center->manager}}" class="form-control" id="input-2" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="input-3">اسم المدير العام</label>
										<input name="head_manager" value="{{$center->head_manager}}" class="form-control" id="input-3" type="text">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="input-5">عنوان المركز</label>
										<textarea name="address" class="form-control" id="input-5" type="text">{{$center->address}}</textarea>
									</div>
								</div>
								<div class="col-md-12">
									<br> <a href="{{route('admin.centers')}}" class="btn btn-primary btn-orange"> الغاء</a>
									<button type="submit" class="btn btn-blue btn-blue addButton">حفظ</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
	</section>
</div>
<!-- Content page End -->
@endsection