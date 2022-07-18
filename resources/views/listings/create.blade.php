<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Postar um Livro</h2>
            <p class="mb-4">Postar seu livro.</p>
        </header>

        <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Titulo Livro</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                       value="{{old('company')}}"/>

                @error('company')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Autor</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                        value="{{old('title')}}"/>

                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Cidade</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                       placeholder="Cidade onde está o livro" value="{{old('location')}}"/>

                @error('location')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">
                    Email Contato
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                       value="{{old('email')}}"/>

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Website/Criticas URL
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                       value="{{old('website')}}"/>

                @error('website')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Seção (separar por virgula)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                       placeholder="Examplo: Ficção, Fantasia, Policial, etc" value="{{old('tags')}}"/>

                @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Capa Livro
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo"/>

                @error('logo')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Descrição do livro
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                          placeholder="Incluir detalhes de uso, marcas, estado de conservação, etc...">{{old('description')}}</textarea>

                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Postar livro
                </button>

                <a href="/" class="text-black ml-4"> Volta </a>
            </div>
        </form>
    </x-card>
</x-layout>
