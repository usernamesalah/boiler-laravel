@php
    if (str_contains($data->photo_url, 'https://is3.cloudhost.id')) {
        $photo = $data->photo_url;
    } else {
        $photo = isset($data->photo_url) ? 'https://fkip-unsri.com/' . $data->photo_url : asset('img/fkip/avatar.png');
    }
@endphp
<section class="wrapper bg-light">
    <div class="container py-14 py-md-12" style="margin-bottom: 3px !important;">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-md-6 col-lg-5 col-xl-5 order-lg-2 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1"
                    style="top: -2rem; right: -1.9rem;"></div>
                <figure class="rounded"><img src="{{ $photo }}"
                        srcset="{{ $photo }} 2x" alt="" style="max-width: 80% !important;"></figure>
            </div>
            <!--/column -->
            <div class="col-lg-7">
                <h2 class="display-4 mb-3">{{ $data->name }}</h2>
                <p class="lead fs-lg">{{ $data->nip }}</p>

                <div class="row">
                    <div class="col-md-6">
                        <h6 class="mb-0">NIDN</h6>
                        <p class="mb-2">{{ $data->nidn }}</p>

                        <h6 class="mb-0">Sinta ID</h6>
                        <p class="mb-2">{{ $data->sinta }}</p>

                        <h6 class="mb-0">Status Dosen</h6>
                        <p class="mb-2">{{ $data->status_dosen }}</p>

                        <h6 class="mb-0">Homebase</h6>
                        <p class="mb-2">{{ $data->prodi->nama }}</p>

                    </div>
                    <div class="col-md-6">
                        <h6 class="mb-0">Pangkat</h6>
                        <p class="mb-2">{{ $data->pangkat }}</p>

                        <h6 class="mb-0">Jabatan Akademik</h6>
                        <p class="mb-2">{{ $data->pangkat }}</p>

                        <h6 class="mb-0">Golongan</h6>
                        <p class="mb-2">{{ $data->golongan }}</p>

                    </div>
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

{{--  --}}
<section class="wrapper bg-light">
    <div class="container py-14 py-md-12">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="row align-items-center counter-wrapper gy-6 text-center">
                    <div class="col-md-3 mb-6">
                        <img src="{{ asset('img/icons/check.svg') }}"
                            class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">{{ count($data->penelitian) }}</h3>
                        <p>Penelitian</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3 mb-6">
                        <img src="{{ asset('img/icons/user.svg') }}"
                            class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">{{ count($data->pengabdian) }}</h3>
                        <p>Pengabdian</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3 mb-6">
                        <img src="{{ asset('img/icons/briefcase-2.svg') }}"
                            class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">{{ count($data->publikasi) }}</h3>

                        <p>Publikasi</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3 mb-6">
                        <img src="{{ asset('img/icons/award-2.svg') }}"
                            class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">{{ count($data->hki) }}</h3>

                        <p>Hak Kekayaan Intelektual</p>
                    </div>
                    <div class="col-md-3 mb-6">
                        <img src="{{ asset('img/icons/award-2.svg') }}"
                            class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">{{ count($data->penghargaan) }}</h3>

                        <p>Penghargaan</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3 mb-6">
                        <img src="{{ asset('img/icons/user.svg') }}"
                            class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">{{ count($data->pkm) }}</h3>
                        <p>PKM</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3 mb-6">
                        <img src="{{ asset('img/icons/briefcase-2.svg') }}"
                            class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">{{ count($data->product_jasa) }}</h3>
                        <p>Product Dan Jasa</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3 mb-6">
                        <img src="{{ asset('img/icons/award-2.svg') }}"
                            class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">{{ count($data->reviewer) + count($data->rekognisi) }}</h3>
                        <p>Rekognisi dan Reviewer</p>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light">
    <div class="container py-14 py-md-10">
        <div class="row text-center">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <h3 class="display-4 mb-9 px-xl-11">Penelitian</h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-8">
            @foreach ($data->penelitian as $penelitian)
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('img/icons/check.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm text-pink me-4" alt="" />
                        </div>
                        <div>
                            <h6 class="mb-1">
                                {{ ucfirst($penelitian->jenis_penelitian) .' ' .ucfirst($penelitian->sumber_pembiayaan) .' Tahun ' .$penelitian->tahun_peroleh }}
                            </h6>
                            <p class="mb-1">{{ ucfirst($penelitian->judul) }}</p>
                            <p class="mb-1">{{ ucfirst($penelitian->jenis_dokumen) }}</p>
                            <p class="mb-0"><b>Rp.
                                    {{ number_format($penelitian->dana_bantuan, 0, ',', '.') }},-</b></p>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--/column -->
        </div>
        <!--/.row -->
    </div>

    <div class="container py-14 py-md-6">
        <div class="row text-center">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <h3 class="display-4 mb-9 px-xl-11">Pengabdian</h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-8">
            @foreach ($data->pengabdian as $pengabdian)
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('img/icons/check.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm text-pink me-4" alt="" />
                        </div>
                        <div>
                            <h6 class="mb-1">
                                {{ ucfirst($pengabdian->jenis_penelitian) .' ' .ucfirst($pengabdian->sumber_pembiayaan) .' Tahun ' .$pengabdian->tahun_peroleh }}
                            </h6>
                            <p class="mb-1">{{ ucfirst($pengabdian->judul) }}</p>
                            <p class="mb-1">{{ ucfirst($pengabdian->jenis_dokumen) }}</p>

                            <p class="mb-0"><b>Rp.
                                    {{ number_format($pengabdian->dana_bantuan, 0, ',', '.') }},-</b></p>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light">
    <div class="container py-14 py-md-8">
        <div class="row text-center">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <h3 class="display-4 mb-9 px-xl-11">Hak Kekayaan Intelektual</h3>
            </div>
            <!-- /column -->
        </div>
        <div class="row gx-md-8 gx-xl-12 gy-10">

            @foreach ($data->hki as $hki)
            <div class="col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <h4>{{ $hki->nama_produk . '-' . $hki->tahun }}</h4>
                        <p class="mb-1">{{ $hki->tingkat . ' - ' . $hki->jenis }}</p>
                        <p class="mb-0">{{ $hki->keterangan }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light">
    <div class="container py-14 py-md-10">
        <div class="row text-center">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <h3 class="display-4 mb-9 px-xl-11">Publikasi</h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-8">
            @foreach ($data->publikasi as $publikasi)
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('img/icons/check.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm text-pink me-4" alt="" />
                        </div>
                        <div>
                            <h6 class="mb-1">
                                {{ ucfirst($publikasi->jenis_publikasi) .' ' .ucfirst($publikasi->tingkat) .' Tahun ' .$publikasi->tahun }}
                            </h6>
                            <p class="mb-1">{{ ucfirst($publikasi->judul) }}</p>
                            <p class="mb-0"><b>Jumlah Sitasi : {{ $publikasi->sitasi }}</b></p>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
</section>
<!-- /section -->


<section class="wrapper bg-light">
    <div class="container py-14 py-md-10">
        <div class="row text-center">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <h3 class="display-4 mb-9 px-xl-11">Rekognisi dan Reviewer</h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-8">
            @foreach ($data->rekognisi as $rekognisi)
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('img/icons/check.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm text-pink me-4" alt="" />
                        </div>
                        <div>
                            <h6 class="mb-1">
                                {{ ucfirst($rekognisi->peran) .' - Tingkat ' .ucfirst($rekognisi->tingkat) .' Tahun ' .$rekognisi->tahun }}
                            </h6>
                            <p class="mb-1">{{ ucfirst($rekognisi->nama_kegiatan) }}</p>
                            <p class="mb-1">Penyelenggara {{ ucfirst($rekognisi->penyelenggara) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($data->reviewer as $reviewer)
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('img/icons/check.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm text-pink me-4" alt="" />
                        </div>
                        <div>
                            <h6 class="mb-1">
                                {{ ucfirst($reviewer->jenis_reviewer) .' - Tingkat ' .ucfirst($reviewer->tingkat) .' Tahun ' .$reviewer->tahun }}
                            </h6>
                            <p class="mb-1">{{ ucfirst($reviewer->nama) }}</p>
                            <p class="mb-1">Penyelenggara {{ ucfirst($reviewer->penyelenggara) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
</section>
<!-- /section -->

<section class="wrapper bg-light">
    <div class="container py-14 py-md-10">
        <div class="row text-center">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <h3 class="display-4 mb-9 px-xl-11">PKM</h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-8">
            @foreach ($data->pkm as $pkm)
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('img/icons/check.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm text-pink me-4" alt="" />
                        </div>
                        <div>
                            <h6 class="mb-1">
                                {{ ucfirst($pkm->sumber_pembiayaan) .' ' .ucfirst($pkm->tingkat) .' Tahun ' .$pkm->tahun }}
                            </h6>
                            <p class="mb-1">{{ ucfirst($pkm->tema) . '-' . ucfirst($pkm->judul) }}</p>
                            <p class="mb-0"><b>Kegiatan : {{ $pkm->kegiatan }}</b></p>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
</section>
<!-- /section -->


<section class="wrapper bg-light">
    <div class="container py-14 py-md-10">
        <div class="row text-center">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <h3 class="display-4 mb-9 px-xl-11">Produk dan Jasa</h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-8">
            @foreach ($data->product_jasa as $produk)
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('img/icons/check.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm text-pink me-4" alt="" />
                        </div>
                        <div>
                            <h6 class="mb-1">
                                {{ ucfirst($produk->nama_product) .' - Tahun ' .$produk->tahun }}
                            </h6>
                            <p class="mb-1">{{ $produk->deskripsi }}</p>
                            <p class="mb-0"><b><a href="{{ $produk->deskripsi }}">Bukti</a></b></p>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
</section>
<!-- /section -->