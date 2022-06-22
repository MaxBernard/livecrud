{{-- <x-layouts.app> --}}
<div>

  <!-- Search form -->
  <div class="row mb-4">
    <div class="col-md-12">
      <div class="float-right mt-5">
        <input wire:model="search" class="form-control" type="text" placeholder="Search Users...">
      </div>
    </div>
  </div>
  
  @if($users->count())
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header py-1" style="background: #808080; color: white;">Users</h5>
        <div class="card-body">
          <table class="table display table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th>
                  <a href="#" role="button" wire:click.prevent="sortBy('name')">
                    Name
                    @include('includes.sort-icon', ['field' => 'name'])
                  </a>
                </th>
                <th>
                  <a href="#" role="button" wire:click.prevent="sortBy('email')">
                    Email
                    @include('includes.sort-icon', ['field' => 'email'])
                  </a>
                </th>
                {{-- <th>
                  <a href="#" role="button" wire:click.prevent="sortBy('address')">
                    Address
                    @include('includes.sort-icon', ['field' => 'address'])
                  </a>
                </th> --}}
                <th class="text-center" style="width: 3%;">
                  <a href="#" role="button" wire:click.prevent="sortBy('age')">
                    Age
                    @include('includes.sort-icon', ['field' => 'age'])
                  </a>
                </th>
                <th class="text-center" style="width: 120px;">
                  <a href="#" role="button" wire:click.prevent="sortBy('created_at')">
                  Created
                  @include('includes.sort-icon', ['field' => 'created_at'])
                  </a>
                </th>
                <th class="text-center" style="width: 140px;">
                  <a href="#" class="add-post btn btn-success btn-sm" data-toggle="modal" data-target="#addModal">
                    <i class="fa fa-plus"></i> + New
                  </a>
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                {{-- <td>{{ $user->address }}</td> --}}
                <td align="center">{{ $user->age }}</td>
                <td style="width: 108px;">{{ $user->created_at->format('m-d-Y') }}</td>
                <td>
                  <button class="btn btn-sm btn-info"><i class="fa fa-eye ml-1"></i></button>
                  <button class="btn btn-sm btn-warning"><i class="fa fa-edit ml-1"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="fa fa-trash ml-1"></i></button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer py-0" style="background: #0079D3; color: white;">
          <div class="col-md-12">
            <span class="pull-right py-0">{{ $users->links() }}</span>
          </div>
        </div>
      </div>
    </div>
  @else
    <div class="alert alert-warning">
      Your query returned zero results.
    </div>
  @endif

</div>
{{-- </x-layouts.app> --}}
