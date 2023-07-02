<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
    </style>
    {{-- The whole world belongs to you. --}}
    <main>
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="" rel="nofollow">Home</a>
                    <span></span> Edit Categories
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <div class="row-cols-md-6">
                                Edit Category
                            </div>
                            <div class="row-cols-md-6">
                                <a href="{{route('admin.categories')}}" class="btn btn-primary float-end">All Category</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert"{{Session::get('message')}}>

                                </div>
                            @endif
                            <form wire:submit.prevent="updateCategory">
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Category Name" wire:model="name" wire:keyup="generateSlug">
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Slug</label>
                                    <input type="text" class="form-control" name="slug" placeholder="Enter Category slug" wire:model="slug">
                                    @error('slug')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="newimage" class="form-label">image</label>
                                    <input type="file" class="form-control" name="newimage" placeholder="Input image Of Category" wire:model="newimage">
                                    @error('newimage')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120" alt="name">
                                    @else
                                        <img src="{{asset('assets/images/categories')}}/{{$image}}" width="120" alt="name"/>
                                    @endif
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="is_popular" class="form-label">Popular</label>
                                    <select class="form-control" name="is_popular" wire:model="is_popular">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                    @error('popular')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary float-end">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
