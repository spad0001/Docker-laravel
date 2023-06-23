@extends('common.master')

@section('content')
<section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                Foo
                            </p>
                        </header>

                        <div class="card-content">
                            <div class="content">
                                Name: <strong>{{$foo->name}}</strong>
                                <br>
                                Thud: <strong>{{$foo->thud}}</strong>
                                <br>
                                Wombat: <strong>{{ $foo->wombat === 1 ? "true" : "false" }}</strong>
                                <br>
                                Created at: <strong>{{ $foo->created_at }}</strong>
                            </div>
                            <div class="field is-grouped">
                                {{-- Here are the form buttons: save, reset and cancel --}}
                                <div class="control">
                                    <a href="{{ route('foo.edit', $foo) }}" class="button is-primary">Edit</a>
                                </div>
                                <div class="control">
                                    <form method="POST" action="{{ route('foo.destroy', $foo) }}">
                                        @csrf
                                        @method('DELETE')
                                        <div class="form-group">
                                            <button class="button is-danger" type="submit">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
