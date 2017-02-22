@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Lembur</div>
                <div class="panel-body">
                    {!! Form::model($lembur,['method'=>'PATCH','route'=>['lemburp.update',$lembur->id]])!!}
                        {!! Form::hidden('id',null,['class'=>'form-control']) !!}
                        <div class="form-group{{ $errors->has('kode_l') ? ' has-error' : '' }}">
                            <label for="kode_l" class="col-md-4 control-label">Kode Kategori Lembur</label>

                            <div class="col-md-6">
                                {!! Form::text('kode_lembur_id',null,['class'=>'form-control']) !!}
                                @if ($errors->has('kode_lembur_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_lembur_id
                                        ') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group{{ $errors->has('pegawai_id') ? ' has-error' : '' }}">
                            <label for="pegawai_id" class="col-md-4 control-label">pegawai_id</label>

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


                        <div class="form-group{{ $errors->has('jumlah_jam') ? ' has-error' : '' }}">
                            <label for="jumlah_jam" class="col-md-4 control-label">Jumlah Jam</label>

                            <div class="col-md-6">
                                {!! Form::text('jumlah_jam',null,['class'=>'form-control']) !!}
                                @if ($errors->has('jumlah_jam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah_jam') }}</strong>
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

