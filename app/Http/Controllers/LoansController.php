<?php

namespace App\Http\Controllers;

use App\Models\Loans;
use Illuminate\Http\Request;

class LoansController extends Controller
{
    
    public function index()
    {
        $loans = Loans::all();
        return view('loans.index', compact('loans'));
    }

    
    public function create()
    {
        return view('loans.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'suffix' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'plan_data' => 'required',
            'loan_purpose' => 'required',
            'desire_loan' => 'required',
            'desire_downpayment' => 'required',
            'desire_term' => 'required',
            'drivers_license' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if($drivers_license = $request->file( key: 'drivers_license')){
            $destinationPath = 'img/';
            $LicenseImage = date('YmdHis').".".$drivers_license->getClientOriginalExtension();
            $drivers_license->move($destinationPath, $LicenseImage);
            $input['drivers_license'] = "$LicenseImage";
        }

        Loans::create($input);
        return redirect()->route( route: 'loans.index')->with('success', 'Loan added successfully');
    }

   
    public function show(Loans $loan)
    {
        return view('loans.show', compact('loan'));
    }

    
    public function edit(Loans $loan)
    {
        return view('loans.edit', compact('loan'));
    }

   
    public function update(Request $request, Loans $loan)
    {
        $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'suffix' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'plan_data' => 'required',
            'loan_purpose' => 'required',
            'desire_loan' => 'required',
            'desire_downpayment' => 'required',
            'desire_term' => 'required'
        ]);

        $input = $request->all();
        if($drivers_license = $request->file( key: 'drivers_license')){
            $destinationPath = 'img/';
            $LicenseImage = date('YmdHis').".".$drivers_license->getClientOriginalExtension();
            $drivers_license->move($destinationPath, $LicenseImage);
            $input['drivers_license'] = "$LicenseImage";
        } else {
            unset($input['drivers_license']);
        }

        $loan->update($input);
        return redirect()->route( route: 'loans.index')->with('success', 'Loan updated successfully');
    }

    
    public function destroy(Loans $loan)
    {
        $loan->delete();
        return redirect()->route( route: 'loans.index')->with('success', 'Loan deleted successfully');
    }
}
