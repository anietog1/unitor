@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('messages.main')}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>{{ __('messages.welcome') }}</p>
                    <form action="{{ route('period.index') }}" method="get">
                        <button type="submit" class="btn btn-primary">{{__('messages.periods')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
