@extends('cultivation.include')
@section('backTitle')
Edit Profile
@endsection
@section('backIndex')
                <!-- Dashboard summery Start Here -->
                <div class="row gutters-20 mb-4">
                    <!-- Admit Form Area Start Here -->
                    <div class="card height-auto">
                            <div class="card-header bg-light">
                                <a href="{{route('staffList')}}" class="btn btn-success">Staff List</a>
                            </div>
                        <div class="card-body">
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
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Edit Teacher Profile</h3>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                        aria-expanded="false">...</a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-times text-orange-red"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                    </div>
                                </div>
                            </div>
                            @if(!empty($profileData))
                            <form class="new-added-form" action="{{ route('updateTeacher') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $profileData->id }}" name="staffId">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Staff ID</label>
                                        <input type="text" value="{{ $profileData->staffId }}" class="form-control" required readonly>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Full Name *</label>
                                        <input type="text" name="firstName" placeholder="Enter first name" class="form-control" value="{{ $profileData->firstName }}" required>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Sure Name *</label>
                                        <input type="text" name="lastName" placeholder="Enter last name" class="form-control" value="{{ $profileData->lastName }}" required>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Father's Name *</label>
                                        <input type="text" name="fathersName" placeholder="Enter fathers name" class="form-control" value="{{ $profileData->fathersName }}" required>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Mother's Name *</label>
                                        <input type="text" name="mothersName" placeholder="Enter mothers name" class="form-control" value="{{ $profileData->mothersName }}" required>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Gender *</label>
                                        <select class="select2" name="gender" required>
                                            <option value="{{ $profileData->gender }}">Male</option>
                                            <option value="">Select *</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Date Of Birth *</label>
                                        <input type="date" name="dob" placeholder="dd/mm/yyyy" class="form-control" value="{{ $profileData->dob }}" required>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Designation *</label>
                                        <select class="select2" name="designation" required>
                                            <option value="{{ $profileData->designation }}">Principal</option>
                                            <option value="">Select *</option>
                                            <option value="1">Principal</option>
                                            <option value="2">Vice Principal</option>
                                            <option value="B+">Teacher</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Join Date</label>
                                        <input type="date" name="joinDate" placeholder="mm/dd/yyyy" class="form-control" value="{{ $profileData->joinDate }}" required>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Blood Group *</label>
                                        <select class="select2" name="blGroup">
                                            <option value="{{ $profileData->blGroup }}">B+</option>
                                            <option value="">Select *</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Religion *</label>
                                        <select class="select2" name="religion" required>
                                            <option value="{{ $profileData->religion }}">Islam</option>
                                            <option value="">Select *</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Buddish">Buddish</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>E-Mail</label>
                                        <input type="email" name="teacherEmail" placeholder="Enter email" class="form-control" value="{{ $profileData->email }}">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Phone</label>
                                        <input type="text" name="mobile" placeholder="Enter mobile number" class="form-control" value="{{ $profileData->mobile }}">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group  ">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Teacher full address" name="address" value="{{ $profileData->address }}">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group mg-t-30">
                                        @if(!empty($profileData->avatar))
                                            <img class="w-75" src="{{ asset('/public/upload/image/staff/') }}/{{ $profileData->avatar }}" alt="$profileData->firstName.' '.$profileData->lastName"><br>
                                            <a href="{{ route('delTeacherPhoto',['profileId'=>$profileData->id]) }}" class="btn btn-danger btn-lg mt-2 ">Remove</a>
                                        @else
                                            <label class="text-dark-medium">Avatar (150px X 150px)</label>
                                            <input type="file" name="avatar" class="form-control-file">
                                        @endif
                                    </div>
                                    <div class="col-12 form-group mg-t-8">
                                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-bluedark">Reset</button>
                                    </div>
                                </div>
                            </form>
                            @else
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-info">
                                        Opps! Sorry, No profile found for update
                                    </div>
                                </div>
                            </div>    
                            @endif
                        </div>
                    </div>
                </div>
@endsection