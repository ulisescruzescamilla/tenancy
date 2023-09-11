<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inquilinos') }}
        </h2>
    </x-slot>

    <x-container class="py-12">
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <form action="{{route('tenants.store')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <x-label for="nombre" for="id" class="mb-2">Nombre</x-label>
                    <x-input type="text" class="w-full mt-2" name="nombre" placeholder="Ingrese el nombre" />
                    <x-input-error for="nombre" class="mt-2"/>
                </div>

                <div class="flex justify-end">
                    <button class="btn btn-blue">Guardar</button>
                </div>
            </form>
        </div>
    </x-container>
</x-app-layout>
