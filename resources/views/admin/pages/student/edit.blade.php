@extends('admin.layouts.master') 
@section('title')
 الطلاب 
@endsection
@section('content')
<!-- Content page Start -->
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="box transparent">
					<div class="box-header border">
						<h3 class="box-title"><span class="semi-bold">تعديل بيانات الطالب</span></h3>
						<div class="box-tools pull-right"> <a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse"><i class="fa fa-chevron-down fa-minus"></i></a>
							<a class="btn btn-box-tool"><i class="fa fa-repeat"></i></a>
							<a class="btn btn-box-tool"><i class="fa fa-cog"></i></a>
							<a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<br>
					<div class="box-body" style="display: block;">
						<form class="form-1 fl-form" action="{{ route('admin.students.edit' , ['id' => $student->id]) }}" enctype="multipart/form-data" method="post" onsubmit="return false;">{{ csrf_field() }}
							<div class="row form-row">
								<div class="col-md-12">
									<div class="user-img-upload">
										<div class="fileUpload user-editimg">
											<span><i class="fa fa-camera"></i> تغيير</span>
											<input type='file' id="imgInp" class="upload" name="image" value="{{$student->image}}"/>
											<input type="hidden" value="students" id="storage" >
										</div>
										<img src="{{asset('storage/uploads/students').'/'.$student->image}}" id="blah" class="img-circle" alt="">
										<p id="result"></p>
										<br>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="checkbox-inline">مشترك فى المواصلات ؟</label>
                    <input class="checkbox-inline minimal" name="transportation" type="checkbox" @if($student->transportation == 1) checked @endif>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="input-1">اسم الطالب</label>
										<input value="{{$student->student_name}}" name="name" class="form-control" id="input-1" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="input-2">الرقم القومى</label>
										<input  value="{{$student->national_id}}" name="national_id" class="form-control" id="input-2" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="input-3">البريد الالكترونى</label>
										<input value="{{$student->email}}" name="email" class="form-control" id="input-3" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="input-4">الجنسية</label>
										<input value="{{$student->nationality}}" name="nationality" class="form-control" id="input-4" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="select-3">المركز</label>
										<select id="select-3" name="center_id" class="form-control">
                      @foreach($centers as $center)
                        @if($center->id == $student->center_id)
                          <option value="{{$center->id}}" selected>{{$center->center_name}}</option>
                        @endif
                      @endforeach
                      @foreach($centers as $center)
                        <option value="{{$center->id}}">{{$center->center_name}}</option>
                      @endforeach
                    </select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="select-4">المرحلة</label>
										<select id="select-4" name="level_id" class="form-control">
                      @foreach($levels as $level)
                        @if($level->id == $student->level_id)
                          <option value="{{$level->id}}" selected>{{$level->level_name}}</option>
                        @endif
                      @endforeach
                      @foreach($levels as $level)
                        <option value="{{$level->id}}">{{$level->level_name}}</option>
                      @endforeach
                    </select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="select-1">ولى الأمر</label>
										<select id="select-1" name="guardian_id" class="form-control">
                      @foreach($guardians as $guardian)
                        @if($guardian->id == $student->guardian_id)
                          <option value="{{$guardian->id}}" selected>{{$guardian->guardian_name}}</option>
                        @endif
                      @endforeach
                      @foreach($guardians as $guardian)
                        <option value="{{$guardian->id}}">{{$guardian->guardian_name}}</option>
                      @endforeach
                    </select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="select-2">الجنس</label>
										<select name="gender" id="select-2" class="form-control">
                      @if($student->gender == "ذكر")
                      <option value="{{$student->gender}}" selected>{{$student->gender}}</option>
                      <option value="أنثى">أنثى</option>
                      @else
                      <option value="{{$student->gender}}" selected>{{$student->gender}}</option>
                      <option value="ذكر">ذكر</option>
                      @endif
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="input-5">عنوان الطالب</label>
										<textarea name="address" class="form-control" id="input-5" type="text">{{$student->address}}</textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<h5 for="select-6">تاريخ الميلاد</h5>
										<input value="{{$student->birth}}" name="birth" type="date" id="select-6" class="form-control" data-placeholder="أدخل تاريخ الميلاد">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<h5>يوم الالتحاق</h5>
										<input value="{{$student->first_day}}" name="first_day" type="date" class="form-control" placeholder="أدخل يوم الالتحاق">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<h5> مواد الطالب</h5>
                      @foreach($materials as $material)
                      <label class="checkbox-inline">{{$material->material_name}}</label>
                      <input class="minimal" name="m{{$loop->index + 1}}" type="checkbox" value="{{$material->id}}">
                      @endforeach
                  </div>
                  <div class="white-bg">
                    <table class="table table-bordered table-striped">
                          <thead>
                          <tr>
                              <th>الترتيب</th>
                              <th>المادة</th>
                              <th>العمليات</th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach($mats as $mat)
                          <tr>
                              <td>{{$loop->index + 1}}</td>
                              <td>{{$mat->material_name}}</td>
                              <td>
                              <button class="btn btn-orange btndelet" data-url="{{ route('admin.smaterial.delete' , ['id' => $mat->id]) }}" >
                                  حذف
                              </button>
                              </td>
                          </tr>
                          @endforeach
                          </tbody>
                      </table>
                    </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<h5> حلقات الطالب</h5>
                      @foreach($courses as $course)
                        <label class="checkbox-inline">{{$course->course_name}}</label>
                        <input class="minimal" name="c{{$loop->index + 1}}" type="checkbox" value="{{$course->id}}">
                      @endforeach
                  </div>
                  <div class="white-bg">
                  <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>الترتيب</th>
                            <th>الحلقة</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cours as $c)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$c->course_name}}</td>
                            <td>
                            <button class="btn btn-orange btndelet" data-url="{{ route('admin.scourse.delete' , ['id' => $c->id]) }}" >
                                حذف
                            </button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
								</div>
								<div class="col-md-12">
									<br> <a href="{{route('admin.students')}}" class="btn btn-orange"> الغاء</a>
									<button type="submit" class="btn btn-blue addButton">حفظ</button>
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