<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Kamal</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kamal</td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-6"></div>
            <div class="card">
            </div>
            <div class="card">
                <div class="card-title">{{ __("You're logged in!") }}</div>
                <div class="card-body">{{ __("You're logged in!") }}</div>
            </div>
            <h1>Hello Sass h1</h1>
            <h2>Hello Sass h2</h2>
            <h3>Hello Sass h3</h3>
            <h4>Hello Sass h4</h4>
            <h5>Hello Sass h5</h5>
            <h6>Hello Sass h6</h6>
            <div class="mt-6"></div>
            <div>
                <button class="btn btn-primary">
                    Primary
                </button>
                <button class="btn btn-secondary">
                    Secondary
                </button>
                <button class="btn btn-danger">
                    Danger
                </button>
                <button class="btn btn-success">
                    Success
                </button>
                <button class="btn btn-warning">
                    Warning
                </button>
                <button class="btn btn-info">
                    Info
                </button>
                <button class="btn btn-disabled">
                    Disabled
                </button>
            </div>

            <div class="mt-6"></div>
            <div>
                <div class="card">
                    <div class="card-title">
                        dfs
                    </div>
                    <div class="card-body">
                        sas
                    </div>
                </div>
                <div class="mt-6"></div>
                <div class="card card-primary">
                    <div class="card-title">Abcd</div>
                    <div class="card-body">
                        sas
                    </div>
                </div>
                <div class="mt-6"></div>
                <div class="card card-secondary">
                    <div class="card-title">Abcd</div>
                    <div class="card-body">
                        sas
                    </div>
                </div>
                <div class="mt-6"></div>
                <div class="card card-success">
                    <div class="card-title">Abcd</div>
                    <div class="card-body">
                        sas
                    </div>
                </div>
                <div class="mt-6"></div>
                <div class="card card-danger">
                    <div class="card-title">Abcd</div>
                    <div class="card-body">
                        sas
                    </div>
                </div>
                <div class="mt-6"></div>
                <div class="card card-info">
                    <div class="card-title">Abcd</div>
                    <div class="card-body">
                        sas
                    </div>
                </div>
            </div>
            <div class="mt-6"></div>
            <div>
                <div class="alert alert-primary">
                    primary
                </div>
                <div class="alert alert-danger">
                    danger
                </div>
                <div class="alert alert-success">
                    success
                </div>
                <div class="alert alert-warning">
                    warning
                </div>
                <div class="alert alert-info">
                    info
                </div>

                <span class="badge badge-primary">
                    primary
                </span>
                <span class="badge badge-secondary">
                    secondary
                </span>
                <span class="badge badge-danger">
                    danger
                </span>
                <span class="badge badge-success">
                    success
                </span>
                <span class="badge badge-warning">
                    warning
                </span>
                <span class="badge badge-info">
                    info
                </span>
                <span class="badge badge-disabled">
                    disabled
                </span>
            </div>
            <div class="mt-6"></div>


        </div>

    </div>






</x-app-layout>
