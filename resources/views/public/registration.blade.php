@extends('account.index')

@section('content')


    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="module module-login col-md-6 mx-auto">
                    <form class="form-vertical" action="{{ URL::route('student-registration-post') }}" method="POST">
                        @csrf
                        <div class="module-head">
                            <h3>Student Registration Form</h3>
                        </div>
                        <div class="module-body">
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="span6" type="text" placeholder="First Name" name="first"
                                        value="{{ Request::old('first') }}" />
                                    <input class="span6" type="text" placeholder="Last Name" name="last"
                                        value="{{ Request::old('last') }}" />

                                    @if ($errors->has('first'))
                                        <span class="error"> {{ $errors->first('first') }}</span>
                                    @endif
                                    @if ($errors->has('last'))
                                        <span class="error"> {{ $errors->first('last') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="span4" type="number" placeholder="Roll number" name="rollnumber"
                                        value="{{ Request::old('rollnumber') }}" />
                                    @if ($errors->has('rollnumber'))
                                        <span class="error"> {{ $errors->first('rollnumber') }}</span>
                                    @endif
                                    <select class="span4" style="margin-bottom: 0;" name="branch">
                                        <option value="0">select branch</option>
                                        @foreach ($branch_list as $branch)
                                            <option value="{{ $branch->id }}">{{ $branch->branch }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('branch'))
                                        <span class="error"> {{ $errors->first('branch') }}</span>
                                    @endif
                                    <input class="span4" type="number" placeholder="Year" name="year"
                                        value="{{ Request::old('year') }}" />

                                    @if ($errors->has('year'))
                                        <span class="error"> {{ $errors->first('year') }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="span8" type="email" placeholder="E-mail" name="email"
                                        autocomplete="false" value="{{ Request::old('email') }}" />
                                    <select class="span4" style="margin-bottom: 0;" name="category">
                                        <option value="0">select category</option>
                                        @foreach ($student_categories_list as $student_category)
                                            <option value="{{ $student_category->cat_id }}">
                                                {{ $student_category->category }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('email'))
                                        {{ $errors->first('email') }}
                                    @endif
                                    @if ($errors->has('category'))
                                        {{ $errors->first('category') }}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="module-foot">
                            <div class="control-group">
                                <div class="controls clearfix">
                                    <button type="submit" class="btn btn-info pull-right">Register for Library</button>
                                    @csrf
                                </div>
                            </div>
                            <a href="{{ URL::route('account-sign-in') }}">Go Back!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('account.style')

@stop
