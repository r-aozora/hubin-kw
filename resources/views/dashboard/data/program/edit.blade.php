<div class="modal fade" id="editProgram{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editProgram{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProgram{{ $item->id }}">
                    Edit Data Program Keahlian
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form class="form form-vertical" action="{{ url('/program/'.$item->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kode">Kode Program Keahlian</label>
                                    <input type="text" id="kode" class="form-control" name="kode" value="{{ $item->kode }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nama">Nama Program Keahlian</label>
                                    <input type="text" id="nama" class="form-control" name="nama" value="{{ $item->nama }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Batal</span>
                    </button>
                    <button type="submit" class="btn btn-primary btn-sm ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Edit Data</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>