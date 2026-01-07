<x-layout>
    <main>
        <h1 class="text-3xl font-bold text-primary-500 text-center">Have any recipe ? Let us know</h1>
        <div class="mt-20">
            <form action="" class="flex flex-col space-y-4">
                @csrf
                <x-input label="Name"/>
                <x-input label="E-Mail"/>
                <div class="flex flex-col space-y-2">
                    <label class="text-sm">Suggestions:</label>
                    <textarea class="p-4 border border-primary-500/40 rounded-lg">
                </textarea>
                </div>

                <button
                    class="px-2 py-4 bg-primary-500 rounded-lg text-white/80 cursor-pointer hover:bg-primary-500/80">
                    Submit
                </button>
            </form>
        </div>

        <div class="mt-20">
            <div class="grid grid-cols-2">
                <div class="border-r border-r-primary-500 mr-6">
                    <article>
                        <p class="font-medium text-md">You can also reach us by</p>
                        <ul class="text-xs mt-4 flex flex-col space-y-4">
                            <li>Phone: +91 98XXX XXX90</li>
                            <li>Email: recipe@contact.com</li>
                            <li>LinkedIN: recipe.food</li>
                            <li>Youtube: recipe.food</li>
                            <li>Location: Kolkata, 700X14, DN-12</li>
                        </ul>
                    </article>
                </div>
                <div class="">
                    <div class="wi-full">
                        <iframe width="300" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=300&amp;height=200&amp;hl=en&amp;q=Kolkata+(Reciep%20Website)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
