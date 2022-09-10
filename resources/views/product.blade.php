<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        {{-- <div class="col-md-12 ">
                                <div class="mt-10 sm:mt-0">
                                    <div class="md:grid md:grid-cols-3 md:gap-6">
                                      <div class="md:col-span-1">
                                        <div class="px-4 sm:px-0">
                                          <h3 class="text-lg font-medium leading-6 text-gray-900">Products Information</h3>

                                        </div>
                                      </div>
                                      <div class="mt-5 md:col-span-2 md:mt-0">
                                        <form action="#" method="POST">
                                          <div class="overflow-hidden shadow sm:rounded-md">
                                            <div class="bg-white px-4 py-5 sm:p-6">
                                              <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                  <label for="product-name" class="block text-sm font-medium text-gray-700">Product Name</label>
                                                  <input type="text" name="product-name" id="product-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                  <label for="generic-name" class="block text-sm font-medium text-gray-700">Generic Name</label>
                                                  <input type="text" name="generic-name" id="generic-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                  <label for="product_type" class="block text-sm font-medium text-gray-700">Product_type</label>
                                                  <input type="text" name="product_type" id="product_type"  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                  <label for="quantity" class="block text-sm font-medium text-gray-700">quantity</label>
                                                  <input type="number" name="quantity" id="quantity"  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                  <label for="sale_price" class="block text-sm font-medium text-gray-700">Sale price</label>
                                                  <input type="text" name="sale_price" id="sale_price" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                  <label for="dicount" class="block text-sm font-medium text-gray-700">Dicount</label>
                                                  <input type="text" name="dicount" id="dicount" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                              <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                                            </div>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="card-body">
                            <div class="table-responsive">
                              <table class="table">
                                  <thead>
                                      <tr class="text-center">
                                          <th>#</th>
                                          <th>Product Name</th>
                                          <th>Product Type</th>
                                          <th>Generic Name</th>
                                          <th>Quantity</th>
                                          <th>Actions</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                  </tbody>
                              </table>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
