<section class="wrapper bg-gradient-primary">
    <div class="container py-14 pb-md-18">
        <div class="position-relative mt-lg-n10 mt-xl-n10">
            <div class="row text-center">
                <div class="col-lg-6 mx-auto">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">Dosen</h2>
                    <h3 class="display-4 mb-10">Dosen Fakultas Keguruan dan Ilmu Pendidikan</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="position-relative">
                <div class="shape bg-dot blue rellax w-16 h-17" data-rellax-speed="1"
                    style="bottom: 0.5rem; right: -1.7rem; z-index: 0;"></div>
                <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1"
                    style="top: 0.5rem; left: -1.7rem; z-index: 0;"></div>
                <div class="row grid-view gy-6 gy-xl-0">
                    @foreach ($data as $item)
                        <div class="col-md-6 pt-5 col-xl-3">
                            <div class="card shadow-lg">
                                <div class="card-body" style="align-content: center;">
                                    <h6 class="mb-1">
                                        <a href="{{ route('detail_dosen' , ['id' => $item->id ]) }}">{{ $item->name }}</a>
                                    </h6>
                                    <div class="meta mb-2">{{ $item->nip }}</div>
                                    <!-- /.social -->
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/column -->
                    @endforeach

                </div>
                <!--/.row -->
            </div>
            <!-- /.position-relative -->
        </div>
        <!-- /div -->
    </div>
    <!-- /.container -->
</section>
