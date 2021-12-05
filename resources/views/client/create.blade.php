<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            @include('includes.alerts')
                        </div>
                    </div>
                    {!! Form::open(['route'=>'client.store']) !!}
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            @include('client._forms.form')
                            <button type="submit" class="btn btn-primary mt-4 mb-4">Cadastrar</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>