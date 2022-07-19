<x-dynamic-component :component="'guest-layout'">
    <!-- Masthead-->
    <section class="masthead d-flex align-items-center justify-content-center">
        <div class="container col-md-6 align-items-center justify-content-center text-center">
            <div class="animate__animated animate__bounceInDown animate__fast">
                <h1 class="text-uppercase text-white font-weight-bold pb-3">{{ config('app.name', 'Laravel') }}</h1>
                <p class="text-white-75 font-weight-light mb-5" style="text-align: left">
                    Sistem Informasi pengelolaan surat-menyurat secara digital/elektronik yang berguna untuk mempercepat penyampaian informasi surat dan disposisinya kepada pihak yang dituju di lingkungan Pemerintah Desa Gelangkulon. Surat yang dikelola terdiri dari surat masuk, surat keluar, dan disposisi surat sampai dengan pemberkasannya secara elektronik.
                </p>
            </div>
            <a class="btn btn-primary btn-xl text-white animate__animated animate__bounceInUp animate__fast"
                href="{{ route('register') }}">Learn more</a>
        </div>
    </section>
</x-dynamic-component>
