@extends('main')
@section('content')

{{-- section --}}

<section class="section dashboard card-sesion">
    <div class="row">
        <div class="col-12">
            <div class="card border-primary border-top border-3 border-0 p-3">
                <div class="card-header">
                    <div class="row">

                        <div class="col-3">
                            <div class="mb-0">
                                <label for="" class="form-label">Select SHAPE</label>
                                <select data-name="shape" class="form-select select2">
                                    @foreach ($shape as $key => $value)
                                        <option value="{{$value->id}}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mb-0">
                                <label for="" class="form-label">Select Material</label>
                                <select data-name="material" class="form-select select2" id="material_select">
                                    @foreach ($material as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->grade }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h6 class="mb-0" id="material_name"></h6>
                    </div>
                    <figure class="highcharts-figure m-0">
                        <div id="chartquartal"></div>
                    </figure>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card border-primary border-top border-3 border-0 p-3">
                <div class="d-flex justify-content-end mb-3">
                    <button type="button" class="btn btn-outline-primary px-5" data-name="add_data"><i class='bx bx-yen mr-1'></i>Add</button>
                </div>
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Material</th>
                                <th rowspan="2">Shape</th>
                                <th rowspan="2">Tahun</th>
                                <th colspan="5" class="text-center">Quartal 1</th>
                                <th colspan="5" class="text-center">Quartal 2</th>
                                <th colspan="5" class="text-center">Quartal 3</th>
                                <th colspan="5" class="text-center">Quartal 4</th>
                            </tr>
                            <tr>
                                <th class="text-center">Base</th>
                                <th class="text-center">Alloy <br> Surcharger</th>
                                <th class="text-center">FOB</th>
                                <th class="text-center">CNF</th>
                                <th class="text-center">Freight</th>

                                <th class="text-center">Base</th>
                                <th class="text-center">Alloy <br> Surcharger</th>
                                <th class="text-center">FOB</th>
                                <th class="text-center">CNF</th>
                                <th class="text-center">Freight</th>

                                <th class="text-center">Base</th>
                                <th class="text-center">Alloy <br> Surcharger</th>
                                <th class="text-center">FOB</th>
                                <th class="text-center">CNF</th>
                                <th class="text-center">Freight</th>

                                <th class="text-center">Base</th>
                                <th class="text-center">Alloy <br> Surcharger</th>
                                <th class="text-center">FOB</th>
                                <th class="text-center">CNF</th>
                                <th class="text-center">Freight</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($arr as $key => $value)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>{{ $value->material_name }}</td>
                                    <td>{{ $value->shape_name }}</td>
                                    <td>{{ $value->thn }}</td>
                                    <td class="text-center">
                                        @if ($value->q1_base == '')
                                            -
                                        @else
                                            ¥ {{ $value->q1_base }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q1_alloy == '')
                                            -
                                        @else
                                            ¥ {{ $value->q1_alloy }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q1_fob == '')
                                            -
                                        @else
                                            ¥ {{ $value->q1_fob }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q1_cnf == '')
                                            -
                                        @else
                                            ¥ {{ $value->q1_cnf }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q1_freight == '')
                                            -
                                        @else
                                            ¥ {{ $value->q1_freight }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q2_base == '')
                                            -
                                        @else
                                            ¥ {{ $value->q2_base }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q2_alloy == '')
                                            -
                                        @else
                                            ¥ {{ $value->q2_alloy }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q2_fob == '')
                                            -
                                        @else
                                            ¥ {{ $value->q2_fob }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q2_cnf == '')
                                            -
                                        @else
                                            ¥ {{ $value->q2_cnf }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q2_freight == '')
                                            -
                                        @else
                                            ¥ {{ $value->q2_freight }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q3_base == '')
                                            -
                                        @else
                                            ¥ {{ $value->q3_base }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q3_alloy == '')
                                            -
                                        @else
                                            ¥ {{ $value->q3_alloy }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q3_fob == '')
                                            -
                                        @else
                                            ¥ {{ $value->q3_fob }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q3_cnf == '')
                                            -
                                        @else
                                            ¥ {{ $value->q3_cnf }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q3_freight == '')
                                            -
                                        @else
                                            ¥ {{ $value->q3_freight }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q4_base == '')
                                            -
                                        @else
                                            ¥ {{ $value->q4_base }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q4_alloy == '')
                                            -
                                        @else
                                            ¥ {{ $value->q4_alloy }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q4_fob == '')
                                            -
                                        @else
                                            ¥ {{ $value->q4_fob }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q4_cnf == '')
                                            -
                                        @else
                                            ¥ {{ $value->q4_cnf }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($value->q4_freight == '')
                                            -
                                        @else
                                            ¥ {{ $value->q4_freight }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="card-form-login" style="display: {{$display}}">
        <div class="row justify-content-center w-100">
            <div class="col-lg-4 col-md-6 d-flex flex-column">

                <div class="d-flex justify-content-center py-4">
                    <a href="" class="logo d-flex w-auto">
                        <img src="assets/img/logo.png" alt="">
                        <span class="d-none d-lg-block">Monitoring</span>
                    </a>
                </div>
                <div class="d-flex justify-content-center py-4">
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal Login !</strong> {{ Session::get('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Access required</h5>
                            <p class="text-center small">Enter your username & password to login</p>
                        </div>

                        <form class="row g-3 needs-validation" novalidate action="{{route('login_post')}}" method="POST">
                            @csrf
                            <div class="col-12">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="username" required>
                                <div class="invalid-feedback">Please enter your username.</div>
                            </div>

                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="yourPassword" required>
                                <div class="invalid-feedback">Please enter your password.</div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Modal Add --}}
<div class="modal fade" id="modal_add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Quartal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card-style">
                            <div class="mb-3">
                                <label for="" class="form-label">Shape</label>
                                <select data-name="shape" class="form-select select-2-add">
                                    @foreach($shape as $key => $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Material</label>
                                <select data-name="material" class="form-select select-2-add" id="material_select">
                                    @foreach($material as $key => $value)
                                        <option value="{{$value->id}}">{{$value->grade}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tahun</label>
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker_years" placeholder="Tahun" aria-label="" aria-describedby="" data-name="thn">
                                    <span class="input-group-text" id=""><i class='bx bxs-calendar'></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Quartal</label>
                                <select data-name="quartal" class="form-select select-2-add">
                                    <option value="">-- Select Quartal --</option>
                                    <option value="1">Quartal 1</option>
                                    <option value="2">Quartal 2</option>
                                    <option value="3">Quartal 3</option>
                                    <option value="4">Quartal 4</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Base</label>
                                <div class="input-group">
                                    <span class="input-group-text" id=""><i class='bx bx-yen'></i></span>
                                    <input type="text" class="form-control" placeholder="Base" aria-label="" aria-describedby="" data-name="base">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Alloy Surcharger</label>
                                <div class="input-group">
                                    <span class="input-group-text" id=""><i class='bx bx-yen'></i></span>
                                    <input type="text" class="form-control" placeholder="Alloy Surcharger" aria-label="" aria-describedby="" data-name="alloy">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">FOB</label>
                                <div class="input-group">
                                    <span class="input-group-text" id=""><i class='bx bx-yen'></i></span>
                                    <input type="text" class="form-control" placeholder="FOB" aria-label="" aria-describedby="" data-name="fob">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">CNF</label>
                                <div class="input-group">
                                    <span class="input-group-text" id=""><i class='bx bx-yen'></i></span>
                                    <input type="text" class="form-control" placeholder="CNF" aria-label="" aria-describedby="" data-name="cnf">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Freight</label>
                                <div class="input-group">
                                    <span class="input-group-text" id=""><i class='bx bx-yen'></i></span>
                                    <input type="text" class="form-control" placeholder="Freight" aria-label="" aria-describedby="" data-name="freight">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-name="save_add">Save</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal ADD --}}

{{-- JS Add Data --}}
<script>
    $(document).on("change", "[data-name='shape']", function(e) {
        var id = $(this).val();
        var table = 'mst_material';
        var field = 'shape';

        $.ajax({
            type: "POST",
            url: "{{ route('actionlistdata') }}",
            data: {
                id: id,
                table: table,
                field: field
            },
            cache: false,
            success: function(data) {
                // console.log(data);
                var html = '';
                $.each(data, function(i, val) {
                    html += '<option value="'+ val.id +'">'+ val.grade+'</option>';
                });
                $('#material_select').html(html);
            },
            error: function(data) {
                Swal.fire({
                    position: 'center',
                    title: 'Action Not Valid!',
                    icon: 'warning',
                    showConfirmButton: true,
                    // timer: 1500
                }).then((data) => {
                    // location.reload();
                })
            }
        });
    });

    $(document).on("click", "[data-name='add_data']", function(e) {
        $("[data-name='thn']").val('');
        $("[data-name='base']").val('');
        $("[data-name='alloy']").val('');
        $("[data-name='fob']").val('');
        $("[data-name='cnf']").val('');
        $("[data-name='freight']").val('');
        $("[data-name='quartal']").val('').trigger("change");
        $("[data-name='shape']").val('1').trigger("change");
        $("[data-name='material']").val('1').trigger("change");
        $("#modal_add").modal('show');
    });

    $(document).on("click", "[data-name='save_add']", function(e) {
        var thn         = $("[data-name='thn']").val();
        var quartal     = $("[data-name='quartal']").val();
        var shape       = $("[data-name='shape']").val();
        var material    = $("[data-name='material']").val();
        var base        = $("[data-name='base']").val();
        var alloy       = $("[data-name='alloy']").val();
        var fob         = $("[data-name='fob']").val();
        var cnf         = $("[data-name='cnf']").val();
        var freight     = $("[data-name='freight']").val();
        var update_by   = "1";
        var table       = "trx_quartal";
        var id1         = material;
        var id2         = thn;
        var field1      = 'id_material';
        var field2      = 'thn';

        if (thn === '' || quartal === '' || base === '' || alloy === '' || fob === '' || cnf === '' || freight === '') {
            Swal.fire({
                position: 'center',
                title: 'Form is empty!',
                icon: 'error',
                showConfirmButton: false,
                timer: 1000
            })
        } else {
            $.ajax({
                type: "POST",
                url: "{{route('actionshowdatawmulti')}}",
                data: {id1:id1,id2:id2,table:table,field1:field1,field2:field2},
                cache: false,
                success: function(dt) {
                    // console.log(dt['data']);
                    if (dt['data'] === null || dt['data'] === '') {
                        if (quartal === '1') {
                            var data = {
                                id_material: material,
                                thn: thn,
                                q1_base: base,
                                q1_alloy: alloy,
                                q1_fob: fob,
                                q1_cnf: cnf,
                                q1_freight: freight,
                                update_by: update_by
                            };
                        } else if (quartal === '2') {
                            var data = {
                                id_material: material,
                                thn: thn,
                                q2_base: base,
                                q2_alloy: alloy,
                                q2_fob: fob,
                                q2_cnf: cnf,
                                q2_freight: freight,
                                update_by: update_by
                            };
                        } else if (quartal === '3') {
                            var data = {
                                id_material: material,
                                thn: thn,
                                q3_base: base,
                                q3_alloy: alloy,
                                q3_fob: fob,
                                q3_cnf: cnf,
                                q3_freight: freight,
                                update_by: update_by
                            };
                        } else if (quartal === '4') {
                            var data = {
                                id_material: material,
                                thn: thn,
                                q4_base: base,
                                q4_alloy: alloy,
                                q4_fob: fob,
                                q4_cnf: cnf,
                                q4_freight: freight,
                                update_by: update_by
                            };
                        } else {
                            Swal.fire({
                                position: 'center',
                                title: 'Form is empty!',
                                icon: 'error',
                                showConfirmButton: false,
                                timer: 1000
                            })
                        }

                        // Action ADD
                        if (thn === '' || quartal === '' || base === '' || alloy === '' || fob === '' || cnf === '' || freight === '') {
                            Swal.fire({
                                position: 'center',
                                title: 'Form is empty!',
                                icon: 'error',
                                showConfirmButton: false,
                                timer: 1000
                            })
                        } else {
                            $.ajax({
                                type: "POST",
                                url: "{{ route('actionadd') }}",
                                data: {table: table,data: data},
                                cache: false,
                                success: function(data) {
                                    // console.log(data);
                                    Swal.fire({
                                        position: 'center',
                                        title: 'Success!',
                                        icon: 'success',
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then((data) => {
                                        location.reload();
                                    })
                                },
                                error: function(data) {
                                    Swal.fire({
                                        position: 'center',
                                        title: 'Action Not Valid!',
                                        icon: 'warning',
                                        showConfirmButton: true,
                                        // timer: 1500
                                    }).then((data) => {
                                        // location.reload();
                                    })
                                }
                            });
                        }
                    } else {
                        if (quartal === '1') {
                            var dats = {
                                id_material: material,
                                thn: thn,
                                q1_base: base,
                                q1_alloy: alloy,
                                q1_fob: fob,
                                q1_cnf: cnf,
                                q1_freight: freight,
                                update_by: update_by
                            };
                        } else if (quartal === '2') {
                            var dats = {
                                id_material: material,
                                thn: thn,
                                q2_base: base,
                                q2_alloy: alloy,
                                q2_fob: fob,
                                q2_cnf: cnf,
                                q2_freight: freight,
                                update_by: update_by
                            };
                        } else if (quartal === '3') {
                            var dats = {
                                id_material: material,
                                thn: thn,
                                q3_base: base,
                                q3_alloy: alloy,
                                q3_fob: fob,
                                q3_cnf: cnf,
                                q3_freight: freight,
                                update_by: update_by
                            };
                        } else if (quartal === '4') {
                            var dats = {
                                id_material: material,
                                thn: thn,
                                q4_base: base,
                                q4_alloy: alloy,
                                q4_fob: fob,
                                q4_cnf: cnf,
                                q4_freight: freight,
                                update_by: update_by
                            };
                        } else {
                            Swal.fire({
                                position: 'center',
                                title: 'Form is empty!',
                                icon: 'error',
                                showConfirmButton: false,
                                timer: 1000
                            })
                        }

                        // Action EDIT
                        if (thn === '' || quartal === '' || base === '' || alloy === '' || fob === '' || cnf === '' || freight === '') {
                            Swal.fire({
                                position: 'center',
                                title: 'Form is empty!',
                                icon: 'error',
                                showConfirmButton: false,
                                timer: 1000
                            })
                        } else {
                            $.ajax({
                                type: "POST",
                                url: "{{ route('actioneditwmulti') }}",
                                data: {id1:id1,whr1:field1,id2:id2,whr2:field2,table:table,dats:dats},
                                cache: false,
                                success: function(data) {
                                    // console.log(data);
                                    Swal.fire({
                                        position: 'center',
                                        title: 'Success!',
                                        icon: 'success',
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then((data) => {
                                        location.reload();
                                    })
                                },
                                error: function(data) {
                                    Swal.fire({
                                        position: 'center',
                                        title: 'Action Not Valid!',
                                        icon: 'warning',
                                        showConfirmButton: true,
                                        // timer: 1500
                                    }).then((data) => {
                                        // location.reload();
                                    })
                                }
                            });

                        }
                    }
                },
                error: function(data) {
                    Swal.fire({
                        position: 'center',
                        title: 'Action Not Valid!',
                        icon: 'warning',
                        showConfirmButton: true,
                        // timer: 1500
                    }).then((data) => {
                        // location.reload();
                    })
                }
            });
        }

    });
</script>
{{-- End JS Add Data --}}

<script>
    $(document).ready(function() {
        setTimeout(updatechartquartal);
    });
</script>

{{-- JS Quartal --}}
<script>
    $(document).on("change", "[data-name='shape']", function(e) {
        var id = $(this).val();
        var table = 'mst_material';
        var field = 'shape';

        $.ajax({
            type: "POST",
            url: "{{ route('actionlistdata') }}",
            data: {
                id: id,
                table: table,
                field: field
            },
            cache: false,
            success: function(data) {
                // console.log(data);
                var html = '';
                $.each(data, function(i, val) {
                    html += '<option value="'+val.id+'">' + val.grade + '</option>';
                });
                $('#material_select').html(html);
            },
            error: function(data) {
                Swal.fire({
                    position: 'center',
                    title: 'Action Not Valid!',
                    icon: 'warning',
                    showConfirmButton: true,
                    // timer: 1500
                }).then((data) => {
                    // location.reload();
                })
            }
        });
    });

    $(document).on("change", "[data-name='material']", function(e) {
        var id = $(this).val();
        updatechartquartal(id);
    });

    Highcharts.chart('chartquartal', {
        chart: {
            type: 'line'
        },
        title: {
            text: ''
        },
        exporting: {
            enabled: false
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: []
        },
        yAxis: [{
            title: {
                text: null
            },
            labels: {
                format: '¥{value}'
            }
        }, {
            title: {
                text: null
            },
            labels: {
                format: '¥{value}'
            },
            opposite: true
        }],
        tooltip: {
            headerFormat: '<span>{point.key}</span><br>',
            pointFormat: '<span style="color:{series.color};">{series.name}:</span>&nbsp;&nbsp;<span>¥{point.y}</span><br>',
            footerFormat: '</table>',
            crosshairs: true,
            shared: true
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true,
                    format: '¥{y}'
                }
            }
        },
        series: [{
            name: 'Base',
            color: '#47A992',
            marker: {
                enabled: false
            },
            data: []
        }, {
            name: 'Alloy Surcharger',
            yAxis: 1,
            color: '#0E2954',
            marker: {
                enabled: false
            },
            data: []
        }, {
            name: 'CNF',
            color: '#CD1818',
            marker: {
                enabled: false
            },
            data: []
        }, {
            name: 'Freight',
            yAxis: 1,
            color: '#4E31AA',
            marker: {
                enabled: false
            },
            data: []
        }]
    });

    var timeouts = {};
    function updatechartquartal(id) {
        var id = id;
        var chart = $('#chartquartal').highcharts();
        $.ajax({
            url: "{{ route('dataquartal') }}",
            type: "POST",
            data: {
                id: id
            },
            dataType: 'json',
            global: false,
            cache: false,
            success: function(data) {
                // console.log(data);
                $("#material_name").text(data.material_name);
                // chart.xAxis[0].setCategories(data.category);
                chart.xAxis[0].update({
                    categories: data.category
                });
                chart.series[0].setData(data.dt_base);
                chart.series[1].setData(data.dt_alloy);
                chart.series[2].setData(data.dt_cnf);
                chart.series[3].setData(data.dt_freight);
                // Check if start and end are undefined
                if (id === undefined) {
                    // If timeout for this id already exists, clear it
                    if (timeouts['quartal']) {
                        clearTimeout(timeouts['quartal']);
                    }
                    // Set a new timeout for this id
                    timeouts['quartal'] = setTimeout(function () {
                        updatechartquartal();
                    }, 1000); // call updateChart every 3 seconds
                }
            },
            complete: function(data) {
                // setTimeout(updatechartquartal, 1000);
                if (id !== undefined ) {
                    clearTimeout(timeouts['quartal']);
                }
            }
        });
    }
</script>
{{-- End JS Quartal --}}

{{-- Select2 --}}
<script>
    $(".select-2-add").select2({
        allowClear: false,
        width: '100%',
        dropdownParent: $("#modal_add")
    });

    $(".select2").select2({
        allowClear: false,
        width: '100%'
    });
</script>
{{-- End Select2 --}}

{{-- JS Datepicker --}}
<script>
    $('.datepicker_years').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years",
        autoclose: true,
        autoHide: true,
    });
</script>
{{-- End JS Datepicker --}}

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>

@stop