@extends('common.master')

@section('content')
<section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="content">
                        @if (\Session::has('msg'))
                            <div class="has-text-success text-center ">
                                <p style=" text-align:center !important;"><b>Success! </b>{!! \Session::get('msg') !!}</p>
                            </div>
                        @endif
                        <div class="has-text-right">
                            <a href="/foo/create" class="button is-primary">Add a new foo...</a>
                        </div>

                        <div class="column is-12">
                            @foreach($foos as $foo)
                                <article class="panel">
                                    <a class="panel-block {{ $foo->wombat === 1 ? "has-background-primary" : "" }}" href="{{ route('foo.show', $foo) }}">
                                        <article class="media">
                                            <div class="media-content ">
                                                <div class="content">
                                                    <p>
                                                        Name: <strong>{{$foo->name}}</strong>
                                                        <br>
                                                        Thud: <strong>{{$foo->thud}}</strong>
                                                        <br>
                                                        Wombat: <strong>{{ $foo->wombat === 1 ? "true" : "false" }}</strong>
                                                        <br>
                                                        Created at: <strong>{{ $foo->created_at }}</strong>
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </article>
                            @endforeach
                        </div>
                        {{ $foos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
