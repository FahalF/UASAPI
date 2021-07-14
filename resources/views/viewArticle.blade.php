@extends('layouts.app')
@section('title', $data->title)
    @section('content')
        <div class="content mt-5">
            <div class="container">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="m5 p-0">{{ $data->title }}</h2>
                            <div style="border-bottom: 1px solid #eee; width: 100%;"></div>
                            <p class="content p-2">{!! $data->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <form method="post" action="{{ route('new_comment') }}">
        <div class="content mt-4">
            <div class="container">
                <div class="container-fluid">
                    @csrf

        {{-- <a href="{{ route('see_comment') }}" class="btn btn-info text-center text-white">See Comment</a> --}}
        <a href="#" class="btn btn-info text-center text-white">See Comment</a>
                </div>
            </div>
        </div>
        <div class="content mt-5">
            <div class="container">
                <div class="container-fluid">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">Komentar</button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="frm-comment" name="frm-comment" placeholder="Type text in here..." rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-dark form-control text-white">Comment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endsection
