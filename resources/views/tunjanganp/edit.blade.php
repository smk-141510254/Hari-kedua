@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <div class="panel panel-primary">
                <div class="panel-heading">Edit Tunjangan Pegawai</div>
                <div class="panel-body">
					{!! Form::model($tunjanganp,['method'=>'PATCH','route'=>['tunjanganp.update',$tunjanganp->id]])!!}
						{!! Form::hidden('id',null,['class'=>'form-control']) !!}
                        <div class="form-group{{ $errors->has('kode_t') ? ' has-error' : '' }}">
                            <label for="kode_t" class="col-md-4 control-label">Kode Tunjangan</label>

                            <div class="col-md-6">
                                {!! Form::text('kode_t',null,['class'=>'form-control']) !!}
                                @if ($errors->has('kode_t'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_t') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group{{ $errors->has('pegawai_id') ? ' has-error' : '' }}">
                            <label for="pegawai_id" class="col-md-4 control-label">Pegawai ID</label>

                            <div class="col-md-6">
                                <select name="pegawai_id" class="form-control">
                                    <option value="">pilih</option>
                                    @foreach($pegawai as $data)
                                    <option value="{{$data->id}}">{{$data->nip}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('pegawai_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pegawai_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      
                        <div class="form-group">
						{!! Form::submit('Save',['class'=>'btn btn-primary form-control']) !!}
					</div>
				{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection