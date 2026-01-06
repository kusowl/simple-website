<x-layout>
    <main>
        <h1 class="text-3xl font-bold text-primary-500">Have any recipe ? Let us know</h1>
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

                <button class="px-2 py-4 bg-primary-500 rounded-lg text-white/80 cursor-pointer hover:bg-primary-500/80">Submit</button>
            </form>
        </div>
    </main>
</x-layout>
