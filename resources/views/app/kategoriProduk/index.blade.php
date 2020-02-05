@extends('layouts.app') 
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body table-responsive">
                <h3>Kategori Produk</h3>
                <hr>
                <br>
                <div class="">
                    <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-1 bs-example-modal" id="modalcreate" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0">Tambah Kategori</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="#"></form> 
                                @csrf
                                <input class="form-control" placeholder="kategori" type="text" id="example-text-input" name="kategori" required="">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('scriptDataTable')
        <!-- Required datatable js -->
        <script src="/vertical/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="/vertical/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/jszip.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="/vertical/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="/vertical/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="/vertical/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
        <script src="/vertical/assets/pages/jquery.datatable.init.js"></script>
@endsection