 <x-layout>
   <x-slot:header>
      ANGGOTA EVENT
   </x-slot:header>
   <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

    </div>
   <div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg">
        <thead class="bg-gray-100 border-b">
            <tr class="px-4 py-2 text-left">
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
               <tr class="border-b hover:bg-gray-50">
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->nama }}</td>
                  <td>{{ $data->umur }}</td>
                  <td>{{ $data->kelas }}</td>
                  <td>{{ $data->alamat }}</td>
                  <td>
                     <a href="{{ route('data.edit', ['data' => $data]) }}"class="text-blue-500 hover:underline">Edit</a>
                  </td>
                  <td>
                     <form method="post" action="{{ route('data.destroy', ['data' => $data]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Hapus" class="text-blue-500 hover:underline">
                     </form>
                  </td>
               </tr>
            @endforeach
        </tbody>
    </table>
</div>

 </x-layout>