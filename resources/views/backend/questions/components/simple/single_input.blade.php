{{-- Single Input --}}
@php
    if(isset($content)){
        $content = json_decode($question->content);
    }
    $value = $width = $height = '';
    isset($content[0]->value) ? $value = $content[0]->value : '';
    isset($content[0]->width) ? $width = $content[0]->width : '';
    isset($content[0]->height) ? $height = $content[0]->height : '';
@endphp
<div id="single_input_part" class="question-box" @if(isset($display)) style="display:{{$display}};" @endif>
    <div class="form-group">
        <input type="text" id="single_input_value" class="form-control " placeholder="Text" value='{{$value}}'>
    </div>
    <div class="form-group">
        <input type="text" id="single_input_width" class="form-control " placeholder="Width" value='{{$width}}'>
    </div>
    <div class="form-group">
        <input type="text" id="single_input_height" class="form-control " placeholder="Height" value='{{$height}}'>
    </div>
</div>
{{-- End Signle Input --}}