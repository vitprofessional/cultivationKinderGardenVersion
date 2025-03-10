@extends('account.include')
@section('backTitle')
Report
@endsection
@section('backIndex')
<div class="row gutters-20 mb-4">
    <div class="col-10 mx-auto">
        <div class="row">
            @if(!empty($feesList))
                @php
                    $sumAmount = $feesList->sum('amount');
                @endphp
                @if(!empty($feesList))
                <div class="receipt-main col-8 mx-auto">
                    <div class="receipt-header row">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mb-3">
                            <div class="receipt-right">
                                <h5>Sonar Bangla College</h5>
                                <p>Gubinathpur,Burichong,Comilla</p>
                                <p> <i class="fa fa-phone"></i> +800 17550-48017</p>
                                <p> <i class="fa fa-envelope-o"></i> sonarbangla003@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="receipt-header receipt-header-mid row">
                        <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                            <div class="receipt-right">
                                
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="receipt-left">
                                <p><b>Date : </b> {{date('d-M-Y')}}</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($feesList))
                                @foreach($feesList as $fl)
                                        @php
                                            $feesName   = $fl->source;
                                            $amount     = $fl->amount;
                                        @endphp
                                    <tr>
                                        <td class="col-md-9">{{ $feesName }}</td>
                                        <td class="col-md-3"> {{ $amount }}/-</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td class="text-right">
                                        <h2><strong>Total: </strong></h2>
                                    </td>
                                    <td class="text-left text-danger">
                                        <h2>
                                            <strong>{{ $sumAmount }}</strong>
                                        </h2>
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="2">Sorry! No data found with your query</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <div class="receipt-header receipt-header-mid receipt-footer row ">
                            <div class="col-xs-6 col-sm-6 col-md-6 text-start mt-5">
                                    <p><u>Gurdian Sign</u></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 text-end mt-5">
                                    <p><u>Cash Incharge</u></p>
                            </div>
                    </div>
                    <div class="row text-center">
                        <div class=" col-2  d-grid gap-2 mt-5">
                            <button class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" type="submit">Print</button>
                        </div>
                    </div>
                </div>
                @else
                <div class="alert alert-info">
                    Sorry! No student data found with your query
                </div>
                @endif
            @else
            <div class="alert alert-info">
                Sorry! No data found
            </div>
            @endif
            
        </div>
    </div>
</div>
@endsection
