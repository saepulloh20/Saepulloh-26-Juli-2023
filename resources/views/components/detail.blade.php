<div class="modal fade" id="exampleModal{{ $pegawai->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Pegawai</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate method="POST" enctype="multipart/form-data"
                    action="{{ route('pegawai.update', $pegawai->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="validationCustom03" class="form-label">Nama Pegawai</label>
                                <input type="text"
                                    class="form-control {{ $errors->has('pegawai_nama') ? 'is-invalid' : '' }}"
                                    name="pegawai_nama" id="validationCustom03" placeholder="Nama Pegawai" required
                                    value="{{ $pegawai->pegawai_nama }}" />
                                @error('pegawai_nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="validationCustom03" class="form-label">Jabatan</label>
                                <input type="text"
                                    class="form-control {{ $errors->has('pegawai_jabatan') ? 'is-invalid' : '' }}"
                                    name="pegawai_jabatan" id="validationCustom03" placeholder="Jabatan" required
                                    value="{{ $pegawai->pegawai_jabatan }}" />
                                @error('pegawai_jabatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="validationCustom03" class="form-label">Umur</label>
                                <input type="text"
                                    class="form-control {{ $errors->has('pegawai_alamat') ? 'is-invalid' : '' }}"
                                    name="pegawai_umur" id="validationCustom03" placeholder="Umur" required
                                    value="{{ $pegawai->pegawai_umur }}" />
                                @error('pegawai_umur')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="validationCustom03" class="form-label">Alamat</label>
                                <div>
                                    <textarea required class="form-control {{ $errors->has('pegawai_alamat') ? 'is-invalid' : '' }}" name="pegawai_alamat"
                                        placeholder="Alamat" rows="2">{{ $pegawai->pegawai_alamat }}</textarea>
                                    @error('pegawai_alamat')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
