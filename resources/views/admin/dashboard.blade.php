@extends('layouts.app')

@section('title', 'Admin')

@section('content')
    <section class="flex flex-wrap items-center justify-between gap-4">
        <div>
            <h2 class="text-3xl font-bold text-slate-900">Painel Administrativo</h2>
            <p class="text-slate-600">Resumo rápido do sistema para tomada de decisão.</p>
        </div>

        <a href="/usuarios/novo"
            class="rounded-lg bg-slate-900 px-4 py-2 font-medium text-white hover:bg-slate-700">
            Novo registro
        </a>
    </section>

    <section class="mt-8 grid gap-4 md:grid-cols-3">
        <article class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-slate-200">
            <p class="text-sm text-slate-500">Projetos ativos</p>
            <p class="mt-2 text-3xl font-bold text-slate-900">12</p>
        </article>

        <article class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-slate-200">
            <p class="text-sm text-slate-500">Usuários cadastrados</p>
            <p class="mt-2 text-3xl font-bold text-slate-900">{{ $usuarios->count() }}</p>
        </article>

        <article class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-slate-200">
            <p class="text-sm text-slate-500">Pendências</p>
            <p class="mt-2 text-3xl font-bold text-amber-600">5</p>
        </article>
    </section>

    <section class="mt-8 rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
        <h3 class="text-xl font-semibold text-slate-900">Usuários cadastrados</h3>

        <div class="mt-4 overflow-x-auto">
            <table class="min-w-full border-collapse text-left">
                <thead>
                    <tr class="border-b border-slate-200 text-sm text-slate-500">
                        <th class="py-3">Nome</th>
                        <th class="py-3">E-mail</th>
                        <th class="py-3">Data de Cadastro</th>
                        <th class="py-3">Ações</th>
                    </tr>
                </thead>

                <tbody class="text-sm text-slate-700">
                    @foreach ($usuarios as $usuario)
                        <tr class="border-b border-slate-100">
                            <td class="py-3 font-medium text-slate-900">
                                {{ $usuario->name }}
                            </td>

                            <td class="py-3 text-slate-600">
                                {{ $usuario->email }}
                            </td>

                            <td class="py-3 text-slate-500">
                                {{ $usuario->created_at->format('d/m/Y') }}
                            </td>

                            <td class="py-3">
                                <a href="/usuarios/{{ $usuario->id }}/editar"
                                    class="text-blue-600 hover:underline">
                                    Editar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

