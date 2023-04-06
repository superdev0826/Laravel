{{-- € --}}
@php
    if(isset($content)){
        $content = json_decode($question->content);
    }
    $width = $height = '';
    isset($content[0]->width) ? $width = $content[0]->width : '';
    isset($content[0]->height) ? $height = $content[0]->height : '';
@endphp
<div id="euro_part" class="question-box" @if(isset($display)) style="display:{{$display}};" @endif>
    <div class="form-group">
        <input type="text" id="euro_input_width" class="form-control " placeholder="Width" value='{{$width}}'>
    </div>
    <div class="form-group">
        <input type="text" id="euro_input_height" class="form-control " placeholder="Height" value='{{$height}}'>
    </div>
</div>
{{-- End € --}}