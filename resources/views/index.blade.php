<x-layouts.app>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9">
        <livewire:live-table />
      </div>
    </div>
  </div>

  <div class="modal" tabindex="-1" role="dialog" id="user-modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <livewire:user-form />
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/users.js') }}" defer></script>
</x-layouts.app>