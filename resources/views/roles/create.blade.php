@extends('layouts.admin')

@section('main-content')
    <?php
    $params_id = null;

    ?>
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Tambah Role</h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-body">
            <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>NAMA ROLE</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Role"
                                class="form-control @error('title') is-invalid @enderror">

                            @error('name')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">PERMISSIONS</label>
                            
                            @foreach ($permissions as $permission)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}" id="check-{{ $permission->id }}">
                                <label class="form-check-label" for="check-{{ $permission->id }}">
                                    {{ $permission->name }}
                                </label>
                            </div>
                            @endforeach
                        </div>

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            SIMPAN</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                    </form>
            </div>
        </div>
    </div>
@endsection




