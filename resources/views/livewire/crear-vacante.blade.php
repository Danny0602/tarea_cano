
    <form wire:submit.prevent="submit" class="md:w-1/2 space-y-5">


        <div>
            <x-input-label for="titulo" :value="__('Titulo Vacante')" />

            <x-text-input wire:model='titulo' id="titulo" class="block mt-1 w-full" type="text"
                :value="old('titulo')" />

            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="salario" :value="__('Salario Mensual')" />

            <select
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                wire:model="salario" id="salario">
                <option value="">-- Seleccione --</option>
                @foreach ($salarios as $salario)
                <option value="{{$salario->id}}">{{$salario->salario}}</option>

                @endforeach
            </select>

            <x-input-error :messages="$errors->get('salario')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="categoria" :value="__('Categoria')" />

            <select
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                wire:model="categoria" id="categoria">
                <option value="">-- Seleccione --</option>
                @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                @endforeach

            </select>

            <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="empresa" :value="__('Empresa')" />

            <x-text-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa"
                :value="old('empresa')" />

            <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="ultimo_dia" :value="__('Ultimo Dia para postularse')" />

            <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia"
                :value="old('ultimo_dia')" />

            <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="pais" :value="__('Pais')" />

            <select
                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                wire:model="pais" id="pais">
                <option value="">-- Seleccione --</option>
                @foreach ($paises as $pais)

                <option value="{{$pais->id}}">{{$pais->name}}</option>

                @endforeach
            </select>

            <x-input-error :messages="$errors->get('pais')" class="mt-2" /> 

        </div>

        @if(count($ciudades) > 0)
        <div>
            <x-input-label for="ciudad" :value="__('Ciudad')" />

            <select
                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                wire:model="ciudad" id="ciudad">
                <option value="">-- Seleccione --</option>
                @foreach ($ciudades as $ciudad)

                <option value="{{$ciudad->id}}">{{$ciudad->name}}</option>

                @endforeach
            </select>

            <x-input-error :messages="$errors->get('ciudad')" class="mt-2" />
        </div>
        @endif

        <div>
            <x-input-label for="descripcion" :value="__('Descripcion Puesto')" />

            <textarea wire:model="descripcion" id="descripcion"
                class="h-72 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">

        </textarea>
            <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="imagen" :value="__('Imagen')" />

            <x-text-input accept="image/*" id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen" />

            <div class="my-5 w-80">
                @if ($imagen)
                Imagen:
                <img src="{{$imagen->temporaryUrl()}}" alt="imagen temporal de subida">
                    
                @endif
            </div>
            <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
        </div>

        <div>
            <x-primary-button class="w-full justify-center py-3 font-black text-base">Crear vacante</x-primary-button>
        </div>
    </form>
