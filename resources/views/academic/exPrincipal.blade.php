    @extends('academic.include')
    @section('backTitle')
    Ex-Principals
    @endsection
    @section('backIndex')
    @php 
        $exPrincipalList    = \App\Models\ExPrincipal::orderBy('id','DESC')->get();
        
        $explId     = null;   
        $exName     = "";
        $exMobile   = "";
        $exEmail    = "";
        $exJoin     = "";
        $exRetire   = "";
        $exDesig    = "";

        if(!empty($exId)):
            $exList       = \App\Models\ExPrincipal::find($exId);
            if(!empty($exList)):
                $explId     = $exList->id;
                $exName     = $exList->fullName;
                $exMobile   = $exList->mobile;
                $exEmail    = $exList->email;
                $exJoin     = $exList->startFrom;
                $exRetire   = $exList->endTo;
                $exDesig    = $exList->designation;
            endif;
        endif;
    @endphp
    <!-- Dashboard summery Start Here -->
    <div class="row gutters-20 mb-4">
        <div class="col-10 mx-auto">
            <div class="card">
                <div class="card-header">Ex-Principal</div>
                <div class="card-body cultivation">
                    <div class="row">
                        <div class="col-12">
                            @if(session()->has('success'))
                                <div class="alert alert-success w-100">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @if(session()->has('error'))
                                <div class="alert alert-danger w-100">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <form action="{{ route('saveExPrincipal') }}" class="form" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="explId" value="{{ $explId }}">
                        @csrf
                        <div class="mb-3">
                            <label for="fullName">Full Name</label>
                            <input type="text" name="fullName" class="form-control" placeholder="Enter important speech of principal" value="{{ $exName }}">
                        </div>
                        <div class="mb-3">
                            <label for="mobileNumber">Mobile</label>
                            <input type="text" name="mobileNumber" class="form-control" placeholder="Enter principal mobile number" value="{{ $exMobile }}">
                        </div>
                        <div class="mb-3">
                            <label for="emailAddress">Email</label>
                            <input type="text" name="emailAddress" class="form-control" placeholder="Enter principal email address" value="{{ $exEmail }}">
                        </div>
                        <div class="mb-3">
                            <label for="joinDate">Join Date</label>
                            <input type="date" name="joinDate" class="form-control" placeholder="Enter principal join date" value="{{ $exJoin }}">
                        </div>
                        <div class="mb-3">
                            <label for="exitDate">Exit Date</label>
                            <input type="date" name="exitDate" class="form-control" placeholder="Enter principal exit date" value="{{ $exRetire }}">
                        </div>
                        <div class="mb-3">
                            <label for="designation">Designation</label>
                            <select name="designation" class="form-select">
                                @if(!empty($explId))
                                <option value="{{ $exDesig }}" selected>{{ $exDesig }}</option>
                                @endif
                                <option value="Principal" selected>Principal</option>
                                <option value="Principal(In-Charge)">Principal(In-Charge)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success btn-lg mx-2" type="submit">Save</button>
                            <a class="btn btn-primary btn-lg mx-2" href="{{ route('exPrincipal') }}">New Profile</a>
                        </div>
                    </form>
                </div>
                <div class="card-header">Ex-Principal List</div>
                <div class="card-body cultivation table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Join Date</th>
                                <th>Exit Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($exPrincipalList))
                            @php
                                $x = 1;
                            @endphp
                            @foreach($exPrincipalList as $expl)
                                <tr>
                                    <td>{{ $x }}</td>
                                    <td>{{ $expl->fullName }}</td>
                                    <td>{{ $expl->designation }}</td>
                                    <td>{{ $expl->startFrom }}</td>
                                    <td>{{ $expl->endTo }}</td>
                                    <td>
                                        <a href="{{ route('editExPrincipal',['id'=>$expl->id]) }}"><i class="fa-light fa-pen-to-square fa-xl"></i></a>
                                        <a href="{{ route('delExPrincipal',['id'=>$expl->id]) }}" onclick="return confirm('Are you sure to delete?')"><i class="fa-thin fa-circle-trash fa-xl"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td>1</td>
                                    <td>Rasel Khondokar</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard summery End Here -->
    @endsection