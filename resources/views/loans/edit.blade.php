@extends('templates.master')

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Edit Loan Details</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <a class="btn btn-primary mb-2" href="{{ route('loans.create') }}">
            Add New Loans
         </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
     @if ($errors->any())
        <div class="mt-2 alert alert-danger">
            <ul class="m-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('loans.update', $loan->id) }}" method="POST" id="update" enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}
        @method('PUT')
        <div class='form-group my-4 d-flex gap-2'>
            <input value="{{ $loan->firstname }}" type='text' id='firstname' name='firstname' placeholder='First Name' class='form-control' autocomplete='off' required />
            <input value="{{ $loan->middlename }}" type='text' id="middlename" name='middlename' placeholder='Middle Name' class='form-control' autocomplete='off' required />
            <input value="{{ $loan->lastname }}" type='text' id="lastname" name='lastname' placeholder='Last Name' class='form-control' autocomplete='off' required />
            <input value="{{ $loan->suffix }}" type='text' id="suffix" name='suffix' placeholder='Suffix' class='form-control' autocomplete='off'/>
        </div>
        <div class='form-group my-4 d-flex gap-2'>
            <input value="{{ $loan->email }}" type='text' id="email" name='email' placeholder='Email' class='form-control' autocomplete='off' required />
            <input value="{{ $loan->contact }}" type='text' id="contact" name='contact' placeholder='Contact' class='form-control' autocomplete='off' required />
        </div>
        <div class='form-group my-4 d-flex gap-2'>
            <input value="{{ $loan->plan_data }}" type='date' id="plan_data" name='plan_data' placeholder='Plan Date To Purchase' class='form-control' autocomplete='off' required />
            <input value="{{ $loan->loan_purpose }}" type='text' id="loan_purpose" name='loan_purpose' placeholder='Loan Purpose' class='form-control' autocomplete='off' required />
        </div>
        <div class='form-group my-4 d-flex gap-2'>
            <input value="{{ $loan->desire_loan }}" type='text' id="desire_loan" name='desire_loan' placeholder='Desired Loan' class='form-control' autocomplete='off' required />
            <input value="{{ $loan->desire_downpayment }}" type='text' id="desire_downpayment" name='desire_downpayment' placeholder='Desired Downpayment' class='form-control' autocomplete='off' required />
            <input value="{{ $loan->desire_term }}" type='text' id="desire_term" name='desire_term' placeholder='Desired Term' class='form-control' autocomplete='off' required />
        </div>
        <div class='form-group my-4'>
            <img src="/img/{{ $loan->drivers_license }}" alt="Drivers License Image" width="300px">
        </div>
    </form>

    <button class="btn btn-primary" form="update" type="submit" name="submit">Update</button>
    <a href="{{ route('loans.index') }}" class="btn btn-dark">Back</a>
    </div>
</div>
@endsection