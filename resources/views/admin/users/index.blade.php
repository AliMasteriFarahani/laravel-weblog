@extends('admin.layouts.master')
@section('content')
    <h4 class="p-b-2 p-t-1 p-l-2">لیست کاربران</h4>
    <table class="table table-hover ">
        <thead>
            <tr>
                <td>avatar</td>
                <th>نام</th>
                <th>ایمیل</th>
                <th>نقش</th>
                <th>وضعیت</th>
                <th>تاریخ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                @if ($user->photo_id)
                <td><img src="{{$user->photo->path}}" width="70" style="border-radius: 10%" alt=""></td>
                    
                @else
                <td></td>
                @endif
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <ul>
                    @foreach ($user->roles as $role)
                        <li>{{$role->name}}</li>
                    @endforeach
                </ul>
                </td>
                <td>
                    @if ($user->status == 0)

                    <span class="tag tag-pill tag-danger">غیر فعال</span>
                    
                    @else
                    <span class="tag tag-pill tag-success">فعال</span>
                    @endif
                </td>
                {{-- <td>{{$user->created_at}}</td> --}}
                <td>{{\Hekmatinasser\Verta\Verta::instance($user->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection