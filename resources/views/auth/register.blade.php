@extends('layouts.default')
@section('content')
    <section>
        <div class="container">
            <div class="register">
                <h3>Registration for Donors</h3>
                {!! Form::open(array('url'=>'add','files'=>true,'class'=>'frm_field')) !!}

                {!! Form::label('name','Full Name',array('id'=>'','class'=>'txt')) !!}
                {!! Form::text('name','',array('id'=>'','class'=>'txt')) !!}

                {!! Form::label('address','Address',array('id'=>'','class'=>'txt')) !!}
                {!! Form::text('address','',array('id'=>'','class'=>'txt')) !!}

                {{ Form::label('gender', 'Gender') }}
                {{ Form::radio('male', 'Male', array('id'=>'','class'=>'')) }}
                {{ Form::radio('female', 'Female', array('id'=>'','class'=>'')) }}
                {{ Form::radio('other', 'Other', array('id'=>'','class'=>'')) }}

                {!! Form::label('dob','Date of Birth',array('id'=>'','class'=>'txts')) !!}
                {!! Form::text('dob','',array('id'=>'','class'=>'txts')) !!}

                {!! Form::label('mobileno','Contact no',array('id'=>'','class'=>'txts')) !!}
                {!! Form::text('mobileno','',array('id'=>'','class'=>'txts')) !!}

                {!! Form::label('wardno','Ward no',array('id'=>'','class'=>'txts')) !!}
                {!! Form::text('wardno','',array('id'=>'','class'=>'txts')) !!}

                {!! Form::label('email','Email',array('id'=>'','class'=>'txt')) !!}
                {!! Form::text('email','',array('id'=>'','class'=>'txt')) !!}

                {!! Form::label('password','Password',array('id'=>'','class'=>'txts')) !!}
                {!! Form::password('password','',array('id'=>'','class'=>'txts')) !!}

                {!! Form::label('confirm-password','Confirm Password',array('id'=>'','class'=>'txts')) !!}
                {!! Form::password('confirm-password','',array('id'=>'','class'=>'txts')) !!}

                {!! Form::label('status','Blood Type',array('id'=>'','class'=>'')) !!}
                {!! Form::select('status', ['A', 'A+','B','B+'])!!}

                <br/>
                <!-- submit buttons -->
                {!! Form::submit('ADD') !!}

                {!! Form::close() !!}
            </div><!-- end of register -->
        </div><!-- end of container -->
    </section><!-- end of section -->
    <div class="container">
@stop