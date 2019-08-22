
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hi {{Auth::user()->username}}
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">UserName</th>
                            <th scope="col">Email</th>
                            <th scope="col">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($users->count() > 0)
                                @for ($i = 0; $i < $users->count(); $i++)
                                    <tr>
                                        <th scope="row">{{$i + 1}}</th>
                                        <td>{{$users[$i]->name}}</td>
                                        <td>{{$users[$i]->email}}</td>
                                        <td>
                                            <form action="{{route('adminUser')}}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="userId" value="{{$users[$i]->id}}">
                                                <button type="submit" class="btn btn-primary btn-sm">View</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endfor
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
