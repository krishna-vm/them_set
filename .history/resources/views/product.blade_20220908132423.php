<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Product
                                        <a class="btn btn-primary mt-2 mt-xl-0 float-end" href="{{url('admin/dashboard')}}">Back</a>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ url('admin/uploadproduct') }}" enctype="multipart/form-data">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-6 mb-3" >
                                                        <label for="">Name</label>
                                                        <input type="text" name="name" class="form-control" required>
                                                </div>
                                                <div class="col-md-6 mb-3" >
                                                        <label for="">Image</label>
                                                        <input type="file" name="image" class="form-control" required>
                                                </div>
                                                <div class="col-md-6 mb-3" >
                                                        <label for="">Original Price</label>
                                                        <input type="text" name="original_price" class="form-control" required>
                                                </div>
                                                <div class="col-md-6 mb-3" >
                                                        <label for="">Our Price</label>
                                                        <input type="text" name="our_price" class="form-control" required>
                                                </div>
                                                <div  class="flex justify-end mt-1 btn btn-success  ">
                                                    <button  type="submit" class="btn btn-success ">
                                                        Add Product
                                                    </button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
