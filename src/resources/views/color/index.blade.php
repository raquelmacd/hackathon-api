@extends('layouts.master')
@section('content')
<div class="row">

        <div class="col-12 col-xl-12">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="fs-5 fw-bold mb-0">Listagem de Cores</h2>
                                </div>
                                <div class="col text-end">
                                <a href="{{ route('colors.create') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                                    <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                    Novo Registro
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th class="border-bottom" scope="col">Código</th>
                                    <th class="border-bottom" scope="col">Descrição</th>
                                    <th class="border-bottom" scope="col">Opções</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($colors as $color)
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                       {{ $color->id }}
                                    </th>
                                    <td class="fw-bolder text-gray-500">
                                    {{ $color->description }}
                                    </td>
                                    <td class="fw-bolder text-gray-500" >
                                    <div class="d-grid gap-2 d-md-flex justify-content">
                                    <a class="btn btn-icon-only d-inline-flex align-items-center" href="{{ route('colors.edit', $color->id) }}">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                    </a>
                                    <form action="{{ route('colors.destroy', $color->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-icon-only d-inline-flex align-items-center" type="submit">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </form>
                                    </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <th class="text-gray-900" scope="row" >
                                       Não há registros
                                    </th>
                                </tr>
                                @endforelse
                                </tbody>
                            </table>
                            {{$colors->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layouts.notifications')
@endsection