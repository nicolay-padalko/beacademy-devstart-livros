<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Editar um livro</h2>
            <p class="mb-4">Edit: {{$listing->title}}</p>
        </header>

        <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Nome do livro</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                       value="{{$listing->title}}"/>

                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Autor</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="author"
                       placeholder="Example: Senior Laravel Developer" value="{{$listing->author}}"/>

                @error('author')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Cidade</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                       placeholder="Cidade onde está o livro" value="{{$listing->location}}"/>

                @error('location')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">
                    Email Contato
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                       value="{{$listing->email}}"/>

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Website/Application URL
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                       value="{{$listing->website}}"/>

                @error('website')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Seção (separar por virgula)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                       placeholder="Examplo: Ficção, Fantasia, Policial, etc" value="{{$listing->tags}}"/>

                @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Capa Livro
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="cover"/>

                <img class="w-48 mr-6 mb-6" src="{{$listing->cover ? asset ('storage/' . $listing->cover) : asset('images/no-image.png')}}" alt=""/>

                @error('cover')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Detalhes
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                          placeholder="Include tasks, requirements, salary, etc">{{$listing->description}}</textarea>

                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Atualizar livro
                </button>

                <a href="/" class="text-black ml-4"> Voltar </a>
            </div>
        </form>
    </x-card>
</x-layout>

