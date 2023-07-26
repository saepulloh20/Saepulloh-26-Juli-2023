@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 mt-4">
            <div class="container">
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    data-bs-whatever="@fat">+ Create New Category</button>
                @include('components.create')
                @include('include.allert')
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Umur</th>
                                        <th>Alamat</th>
                                        <th>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pegawais as $no => $pegawai)
                                        <td>{{ ++$no }}</td>
                                        <td>{{ $pegawai->pegawai_nama }}</td>
                                        <td>{{ $pegawai->pegawai_jabatan }}</td>
                                        <td>{{ $pegawai->pegawai_umur }}</td>
                                        <td>{{ $pegawai->pegawai_alamat }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm mb-3"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal{{ $pegawai->id }}"
                                                data-bs-whatever="@fat">Detail</button>
                                            <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"
                                                    class="btn d-flex btn-danger btn-sm mb-3">Delete</button>
                                            </form>
                                        </td>
                                        @include('components.detail')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('addon-script')
    <script>
        //ajax delete
        function Delete(id) {
            var id = id;
            var token = $('meta[name="csrf-token"]').attr('content');
            //ajax delete
            jQuery.ajax({
                url: "/admin/discount/" + id,
                data: {
                    "id": id,
                    "_token": '{!! csrf_token() !!}'
                },
                type: 'delete',
            });
        }
    </script>
@endpush
