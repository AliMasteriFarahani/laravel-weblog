@extends('admin.layouts.master')
@section('content')

<div class="col-md-6 offset-md-3">
     @include('partials.error')
    <h5 class="p-b-2 p-t-1 p-l-2">ایجاد کاربر جدید</h5>
{!! Form::open(['method'=>'POST','action'=>'Admin\AdminUserController@store','files'=>true]) !!}
   <div class="form-group">
       {!! Form::label('name','نام و نام خانوادگی') !!}
       {!! Form::text('name',null,['class'=>'form-control']) !!}
   </div>
   <div class="form-group">
       {!! Form::label('email','ایمیل') !!}
       {!! Form::text('email',null,['class'=>'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::label('avatar','تصویر پروفایل') !!}
    {!! Form::file('avatar',null,['class'=>'form-control']) !!}
   </div>
   <div class="form-group">
       {!! Form::label('password','رمز عبور') !!}
       {!! Form::password('password',['class'=>'form-control']) !!}
   </div> 
   <div class="form-group">
       {!! Form::label('role','نقش') !!}
       {!! Form::select('roles[]',$roles,2,['multiple'=>'multiple','class'=>'form-control']) !!}
       {{-- 'name'=>'roles[]' --}}
   </div> 
   <div class="form-group">
       {!! Form::label('status','وضعیت') !!}
       {!! Form::select('status',[0=>'غیر فعال',1=>'فعال'],0,['class'=>'form-control']) !!}
   </div>
   <div class="form-group">
       {!! Form::submit('ذخیره',['class'=>'btn btn-success']) !!}
   </div>
{!! Form::close() !!}
</div>
@endsection