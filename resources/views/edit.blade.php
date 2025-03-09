<x-layout>
   <x-slot:header>
      EDIT ANGGOTA
   </x-slot:header>
   <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ "Umur hanya boleh berbentuk angka" }}</li>
            @endforeach
        </ul>

        @endif
    </div>
   <form method="post" action="{{ route("data.update", ['data' => $data]) }}">
      @csrf
      @method('put')
      <div class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg">
         <label class="block font-semibold text-gray-700">Nama Lengkap</label>
         <input type="text" name="nama" placeholder="Masukan nama" value="{{ $data->nama }}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 mb-4">

         <label class="block font-semibold text-gray-700">Umur</label>
         <input type="text" name="umur" placeholder="Masukan umur" value="{{ $data->umur }}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 mb-4">

         <label class="block font-semibold text-gray-700">Kelas</label>
         <input type="text" name="kelas" placeholder="Masukan kelas" value="{{ $data->kelas }}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 mb-4">

         <label class="block font-semibold text-gray-700">Alamat</label>
         <input type="text" name="alamat" placeholder="Masukan alamat" value="{{ $data->alamat }}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 mb-4">


         <button type="submit" class="w-full mt-6 bg-gray-700 text-white py-3 rounded-md font-semibold hover:bg-gray-900">Simpan</button>
      </div>
   </form>

 </x-layout>