@extends('user.layout')
@section('title')
    Contract
@endsection
@section('content')
    <div class="mt-4">
        <div class="col-lg-7 m-auto">
            <h2 class="text-center">ADDRESS</h2>
            <hr>
            {{-- <div class="mb-3">
            <a href={{ route('/address') }}>
                <p class=" h5" style="color: rgb(23, 23, 251)" route>Add Address +</p>
            </a>
        </div> --}}

            @foreach ($address as $index => $address)
                <div class="col-md-6 col-lg-9 mt-5 m-auto mb-5">
                    <div class="product_layout3_content bg-white position-relative shadow shadow-lg d-flex"
                        data-aos="fade-right" data-aos-duration="1500">

                            <form action="{{ route('active-address') }}" method="POST" class="d-flex">
                                @csrf
                                {{-- <input type="radio" id="active{{ $index }}" name="active" {{ $address->active == 1 ? 'checked' : '' }}
                                         value="{{ $address->id }}">
                                    <label class="h5">{{ $address->name }} , {{ $address->email }} ,
                                        {{ $address->phone_number }} ,
                                        {{ $address->primary_address }} ,
                                    </label> --}}
                                <input type="radio" class="mx-3" {{ $address->active == 1 ? 'checked' : '' }}>
                                <input type="hidden" name="active" value="{{ $address->id }}">
                                <label class="h5">{{ $address->name }} , {{ $address->email }} ,
                                    {{ $address->phone_number }} ,
                                    {{ $address->primary_address }}.
                                </label>
                                <button type="submit" class="btn btn-primary  mx-3">Active</button>
                            </form>

                        <div>

                        </div>
                    </div>
                </div>
            @endforeach
            {{-- {{ count($address) }} --}}
            {{-- @if ($countAddres > 0)
                <div class="float-end">
                    <p class=" h5 float-end border p-1 px-3" style="color: rgb(23, 23, 251)" onclick="change()">Change</p>
                </div>
                @endif --}}
        </div>
    @endsection
