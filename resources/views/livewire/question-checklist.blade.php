<div>
   
  @if(isset($selectedQuestion))
    <div class="form-group">
      <label>Soal Yang Dipilih</label>
      <table id="table_id" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>Hapus</th>
          <th>Jenis Soal</th>
          <th>Detail Soal</th>
          <th>Checked</th>
        </tr>
        </thead>
        <tbody>
        @if (isset($questionsAll))
            @foreach ($questionsAll as $question)
            <tr>
              <td>
                  <button type="button" class="btn btn-danger" wire:click="deselectQuestion({{ $question->id }})"><i class="fas fa-minus-circle"></i></button>
              </td>
              <td>{{ $subject->getName($question->jenis_id) }}</td>
              <td>{{ $question->detail }}</td>
              <td><input class="form-check-input" type="checkbox" name="questions[]" value="{{ $question->id }}" 
                id="check-{{ $question->id }}" checked></td>
            </tr>
            @endforeach
        @endif
        
        </tbody>
      </table>
    </div>
  @endif
    <div class="card">
        <div class="card-header">
            <h3>Tambah Soal</h3>
        </div>
        <div class="card-body">
          {{-- @foreach ($selectedQuestion as $item)
              {{ $item  }}
          @endforeach --}}
                
                    
          <table id="table_id" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Pilih</th>
              <th>Jenis Soal</th>
              <th>Detail Soal</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($questions as $question)
              <tr>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" wire:model="selectedQuestion" type="checkbox" name="questions[]" value="{{ $question->id }}" 
                               id="check-{{ $question->id }}">
                    </div>
                </td>
                <td>{{ $subject->getName($question->jenis_id) }}</td>
                <td>{{ $question->detail }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
         
          <div style="text-align: center">
            {{$questions->links()}}
          </div>
        </div>
    </div>
</div>
