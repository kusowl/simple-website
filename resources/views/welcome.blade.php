<x-layout>
    <main class="flex items-center flex-col space-y-10">
        <header class="text-center">
            <h1 class="text-4xl text-primary-500 font-black">Healthy meals, zero fuss</h1>
            <p class="text-xs w-100 text-primary-500 mt-4">
                Discover style Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusamus assumenda consectetur facere maiores neque, nostrum!
            </p>
        </header>
        <section class="hero w-252 h-100">
            <img class="object-cover object-center h-full w-full border-5 border-white rounded-lg"
                 src="{{asset('storage/images/cookinf-image.jpg')}}" alt="">
        </section>

        <section class="services">
            <h2 class="text-center font-bold text-2xl text-primary-500 mb-4 border-b border-b-black/20 py-6">What you
                will get !</h2>
            <div class="grid grid-cols-3 gap-10">
                <div class="">
                    <p class="text-xl font-bold text-primary-500">Whole food recipes</p>
                    <p class="text-xs w-40 text-primary-500/70">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Eius eos nemo nulla odio placeat porro!</p>
                </div>
                <div class="">
                    <p class="text-xl font-bold text-primary-500">Minumum fuss</p>
                    <p class="text-xs w-40 text-primary-500/70">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Eius eos nemo nulla odio placeat porro!</p>
                </div>
                <div class="">
                    <p class="text-xl font-bold text-primary-500">Search in seconds</p>
                    <p class="text-xs w-40 text-primary-500/70">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Eius eos nemo nulla odio placeat porro!</p>
                </div>
            </div>
        </section>
    </main>
    </body>
</x-layout>
