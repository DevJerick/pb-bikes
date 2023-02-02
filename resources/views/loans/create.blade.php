@extends('templates.master')

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Add New Loans</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <a class="btn btn-primary mb-2" href="{{ route('loans.index') }}">
            View Loans
         </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        @if ($errors->any())
        <div class="mt-2 alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


        <form action="{{ route('loans.store') }}" method="POST" id="insert" enctype="multipart/form-data">
            @csrf
            <div class='form-group my-4 d-flex gap-2'>
                <input type='text' id='firstname' name='firstname' placeholder='First Name' class='form-control' autocomplete='off' required />
                <input type='text' id="middlename" name='middlename' placeholder='Middle Name' class='form-control' autocomplete='off' required />
                <input type='text' id="lastname" name='lastname' placeholder='Last Name' class='form-control' autocomplete='off' required />
                <input type='text' id="suffix" name='suffix' placeholder='Suffix' class='form-control' autocomplete='off'/>
            </div>
            <div class='form-group my-4 d-flex gap-2'>
                <input type='text' id="email" name='email' placeholder='Email' class='form-control' autocomplete='off' required />
                <input type='text' id="contact" name='contact' placeholder='Contact' class='form-control' autocomplete='off' required />
            </div>
            <div class='form-group my-4 d-flex gap-2'>
                <input type='date' id="plan_data" name='plan_data' placeholder='Plan Date To Purchase' class='form-control' autocomplete='off' required />
                <input type='text' id="loan_purpose" name='loan_purpose' placeholder='Loan Purpose' class='form-control' autocomplete='off' required />
            </div>
            <div class='form-group my-4 d-flex gap-2'>
                <input type='text' id="desire_loan" name='desire_loan' placeholder='Desired Loan' class='form-control' autocomplete='off' required />
                <input type='text' id="desire_downpayment" name='desire_downpayment' placeholder='Desired Downpayment' class='form-control' autocomplete='off' required />
                <input type='text' id="desire_term" name='desire_term' placeholder='Desired Term' class='form-control' autocomplete='off' required />
            </div>
            <div class='form-group my-4'>
                <input type='file' name='drivers_license' id="drivers_license" class='form-control' autocomplete='off' required />
            </div>
        </form>

        <button class="btn btn-primary" form="insert" type="submit" name="submit">Save</button>
        <a href="{{ route('loans.index') }}" class="btn btn-dark">Back</a>
    </div>
</div>
@endsection