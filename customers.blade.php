@extends('layouts.app')
@section('content')
<section><div class="page-head"><div><div class="eyebrow">Temporary static data</div><h1>Customer Accounts</h1><p>Five sample records prepared by <code>CustomerController</code>.</p></div><a class="button" href="{{ route('users') }}">View user accounts</a></div><div class="table-wrap"><table><thead><tr><th>#</th><th>Customer</th><th>Email</th><th>Phone</th><th>Status</th></tr></thead><tbody>
@foreach ($customers as $customer)
<tr><td>{{ $customer['id'] }}</td><td><strong>{{ $customer['name'] }}</strong></td><td>{{ $customer['email'] }}</td><td>{{ $customer['phone'] }}</td><td><span class="badge {{ strtolower($customer['status']) }}">{{ $customer['status'] }}</span></td></tr>
@endforeach
</tbody></table></div></section>
@endsection
