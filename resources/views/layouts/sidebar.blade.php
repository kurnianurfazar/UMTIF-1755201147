<h4 class="text-center">Menu</h4>
<div class="list-group list-group-flush">
  <a href="/mhs" class="list-group-item list-group-item-action {{ (request()->is('mhs')) ? 'active' : '' }}">Mahasiswa</a>
  <a href="/dosen" class="list-group-item list-group-item-action {{(request()->is('dosen')) ? 'active' : '' }}">Dosen</a>

</div>
