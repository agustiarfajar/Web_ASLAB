<div class="card">
    <div class="card-header">
        <div class="row">
            <h4><i class="fas fa-exam"></i> {{ $exam['name'] }} </h4>
        </div>
    </div>
    @foreach ($questions as $question)
    <div class="card-body">
        <b>Soal No. {{ $questions->currentPage() }}</b>
        <p>{{ $question['detail'] }}</p>
           @if($question['image_id'])
                <img src="{{ Storage::url('public/images/'.$image->getLink($question['image_id'])) }}" style="width: 150px">
            @else
                NO
            @endif
        <br>
        <i>Pilih salah satu jawaban dibawah ini:</i> 
        <br>
        <br>
        <div class="btn-group-vertical" role="group" aria-label="Basic example">
            <button type="button" class="{{ in_array($question['id'].'-'.$question['option_A'], $selectedAnswers) ? 'btn btn-info border border-secondary rounded' : 'btn btn-light border border-secondary rounded' }}"
            wire:click="answers({{ $question['id'] }}, '{{ $question['option_A'] }}')"><p class="text-left"><b> A. {{ $question['option_A'] }} </b><i class="{{ $question['option_A'] == $question['answer'] ? 'fas fa-check' : ''  }}"></i></p></button>
            <button type="button" class="{{ in_array($question['id'].'-'.$question['option_B'], $selectedAnswers) ? 'btn btn-info border border-secondary rounded' : 'btn btn-light border border-secondary rounded' }}"
            wire:click="answers({{ $question['id'] }}, '{{ $question['option_B'] }}')"><p class="text-left"><b> B. {{ $question['option_B'] }} </b><i class="{{ $question['option_B'] == $question['answer'] ? 'fas fa-check' : ''  }}"></i></p></button>
            <button type="button" class="{{ in_array($question['id'].'-'.$question['option_C'], $selectedAnswers) ? 'btn btn-info border border-secondary rounded' : 'btn btn-light border border-secondary rounded' }}"
            wire:click="answers({{ $question['id'] }}, '{{ $question['option_C'] }}')"><p class="text-left"><b> C. {{ $question['option_C'] }} </b><i class="{{ $question['option_C'] == $question['answer'] ? 'fas fa-check' : ''  }}"></i></p></button>
            <button type="button" class="{{ in_array($question['id'].'-'.$question['option_D'], $selectedAnswers) ? 'btn btn-info border border-secondary rounded' : 'btn btn-light border border-secondary rounded' }}"
            wire:click="answers({{ $question['id'] }}, '{{ $question['option_D'] }}')"><p class="text-left"><b> D. {{ $question['option_D'] }} </b><i class="{{ $question['option_D'] == $question['answer'] ? 'fas fa-check' : ''  }}"></i></p></button>
        </div>
        <br><br>
        <i>Pembahasan</i> 
        <br>
       
        <div class="alert alert-success" role="alert">
            {{ $question['penjelasan'] }}
        </div>
        
    </div>
    @endforeach
    
    
    <div class="d-flex justify-content-center">
        {{$questions->links()}}
    </div>
    <div class="card-footer">
        @if ($questions->currentPage() == $questions->lastPage())
        <a href="{{ route('ujians.index') }}" class="btn btn-primary btn-block" role="button" aria-pressed="true">Kembali</a>
        @endif
    </div>
</div>


