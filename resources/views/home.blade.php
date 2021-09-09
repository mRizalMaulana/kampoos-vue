@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <ul id="navTodos" class="nav nav-tabs">
                    <li class="nav-item">
                        <router-link to="/" class="nav-link nav-router-link active" onclick="activeNav('/')">Todo List</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/create" class="nav-link nav-router-link" onclick="activeNav('/create')">Create Todo</router-link>
                    </li>
                </ul>

                <router-view></router-view>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
{{--    <script>--}}
{{--        function activeNav(currentNav) {--}}
{{--            const navItems = document.querySelectorAll('#navTodos .nav-link');--}}
{{--            for (let index = 0; index < navItems.length; index++) {--}}
{{--                navItems[index].classList.remove('active');--}}
{{--            }--}}

{{--            currentNav.classList.add('active');--}}
{{--        }--}}
{{--    </script>--}}
@endpush
