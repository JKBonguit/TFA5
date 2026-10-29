@extends('layouts.app')
@section('content')
<section><div class="page-head"><div><div class="eyebrow">Temporary static data</div><h1>User Accounts</h1><p>Five sample records prepared by <code>UserController</code>.</p></div><a class="button" href="{{ route('customers') }}">View customer accounts</a></div><div class="table-wrap"><table><thead><tr><th>#</th><th>User</th><th>Email</th><th>Role</th><th>Status</th></tr></thead><tbody>
@foreach ($users as $user)
<tr><td>{{ $user['id'] }}</td><td><strong>{{ $user['name'] }}</strong></td><td>{{ $user['email'] }}</td><td>{{ $user['role'] }}</td><td><span class="badge {{ strtolower($user['status']) }}">{{ $user['status'] }}</span></td></tr>
@endforeach
</tbody></table></div></section>
@endsection
