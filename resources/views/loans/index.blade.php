@extends('templates.master')

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">LOAN LIST</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <a class="btn btn-primary mb-2" href="{{ route('loans.create') }}">
           Add New Loans
        </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        @if ($message = session('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        <div class="table-responsive" id="no-more-tables">
            <table class="table table-sm table-hover mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Suffix</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Plan Date</th>
                        <th>Loan Purpose</th>
                        <th>Desired Loan</th>
                        <th>Desired Downpayment</th>
                        <th>Desired Term</th>
                        <th>Drivers License</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loans as $index => $val )
                        <tr>
                            <td data-title="#">{{ ++$index }}</td>
                            <td data-title="First Name">{{ $val->firstname }}</td>
                            <td data-title="Middle Name">{{ $val->middlename }}</td>
                            <td data-title="Last Name">{{ $val->lastname }}</td>
                            <td data-title="Suffix">{{ $val->suffix }}</td>
                            <td data-title="Email">{{ $val->email }}</td>
                            <td data-title="Contact">{{ $val->contact }}</td>
                            <td data-title="Plan Date To Purchase">{{ $val->plan_data }}</td>
                            <td data-title="Loan Purpose">{{ $val->loan_purpose }}</td>
                            <td data-title="Desired Loan">{{ $val->desire_loan }}</td>
                            <td data-title="Desired Downpayment">{{ $val->desire_downpayment }}</td>
                            <td data-title="Desired Term">{{ $val->desire_term }}</td>
                            <td data-title="Drivers License"><img src="/img/{{ $val->drivers_license }}" width="30px"></td>
                            <td data-title="Actions">
                                <form action="{{ route('loans.destroy', $val->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-sm btn-success" href={{ route('loans.show', $val->id) }}>Show</a>
                                <a class="btn btn-sm btn-warning" href={{ route('loans.edit', $val->id) }}>Edit</a>
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection