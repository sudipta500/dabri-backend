@extends('dabri.layout')
@section('title')
Category
@endsection
@section('container')

@if (Session::get('success'))
<script>
    Swal.fire({
    title: 'Done',
    text: "{{Session::get('success')}}",
    icon: 'success',
    showConfirmButton: false,
    timer: 2500,
})
 </script>
@endif

{{-- @if (Session::get('successEdit'))
<script>
    Swal.fire({
    title: 'Done',
    text: "{{Session::get('successEdit')}}",
    icon: 'success',
    showConfirmButton: false,
    timer: 2500,
})
 </script>
@endif --}}


<style>
    .w-5{
        display: none;
    }
</style>


<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header d-flex justify-content-between ">
                <h5 class="card-title mb-0">Catagory Data</h5>
                {{-- <form action="" method="POST" class="d-flex gap-1">
                    @csrf
                      <input type='search' class='form-control rounded rounded-lg ' name="search" placeholder='Searching...'/>
                      <button class="btn btn-primary" type="submit">Search</button>
                </form> --}}
            </div>
            <table id="datatable" class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Flavour Name</th>
                        <th>Packet Size </th>
                        <th>Packaging Type</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>price</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Secondary Address</th>
                        <th >Operation</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($OrderItem as $index => $item )
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{$item->product->flavour_name}}</td>
                        <td>{{$item->product->packating_type}}</td>
                        <td>{{$item->product->packetSize->packet_size}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->product->category->category_name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->address->name}}</td>
                        <td>{{$item->address->email}}</td>
                        {{-- <td>{{$item->address->email}}</td> --}}
                        <td>{{$item->address->phone_number}}</td>
                        <td>{{$item->address->primary_address}}</td>
                        <td>{{$item->address->second_address}}</td>
                        <td class=" d-md-table-cell">
                            <a href="{{url('admin/edit_item',$item->id)}}"><button class="btn btn-success" >Delivered</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- {{$catagory->links()}} --}}
    {{-- {!! $catagory->appends(Request::all())->links() !!} --}}
</div>
{{-- <script>
      function deleteData(id) {
     Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result)=>{
        if(result.value){
            window.location=`/admin/delete-catagory/${id}`
        }
    })
   }
</script> --}}
@endsection
