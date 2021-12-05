<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @include('includes.alerts')
                    <a href="{{ route('client.create') }}" class="btn btn-primary">Cadastrar</a>
                    <table class="table table-hover pt-4 pb-4">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Profissão</th>
                                <th>Endereço</th>
                                <th>Data nasc</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clients as $client)
                            <tr>
                                <td>{{$client->name}}</td>
                                <td>{{$client->profission}}</td>
                                <td>{{$client->address}}</td>
                                <td>{{$client->date}}</td>
                                <td>
                                    <a href="{{ route('client.edit', ['id'=>$client->id]) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="{{ route('client.delete', ['id'=>$client->id]) }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="5">Nenhum registro encontrado!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="">
                        {!!$clients->links()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>