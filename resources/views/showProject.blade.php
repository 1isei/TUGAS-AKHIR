@if($data->isEmpty())
    <h6 class="text-center">Siswa Belum Memiliki Project</h6>
@else
    @foreach ($data as $item)
    <div class="card">
        <div class="card-header">
            {{$item->nama_project}}
        </div>
        <div class="card-body">
            {{$item->tanggal}}
            {{$item->deskripsi}}
            <img src="{{asset('/template/img/'.$item->foto)}}" class="card-body" width="250"  alt=" " >
        </div>
        <div class="card-footer">
            <a href="masterproject/{{$item->id}}/edit"  class="btn btn-warning btn-circle btn-sm"> <i class="fas fa-edit"></i></a>  
             <form class="d-inline" action="{{route('masterproject.hapus', $item->id)}}" method="delete">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>
        </td>
        </div>
    </div>
    @endforeach
@endif