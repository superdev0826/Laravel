{{--File Upload--}}
<div id="file_upload_input" class="question-box" @if(isset($display)) style="display:{{$display}};" @endif>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="File Input" readonly>
    </div>
    <div class="form-group">
        <label for="Number of Files"> Nuermious of Files </label>
        <input type="number" class="form-control" min="1" id="num_files" name="num_files" placeholder="Please type number of files" value="1">
    </div>
    <div class="form-group">
        <label for="Number of Files"> Type of Files </label>
        @php
            $file_acceptable_exts = ['doc', 'txt', 'xls', 'mbd', 'ppt', 'pdf', 'docx', 'ql', 'zip', 'rar',
            'jpg', 'png', 'gif'];
        @endphp
            <select class="form-control select2 required" name="file_acceptable_exts" id="file_acceptable_exts" placeholder="Options" multiple>
            @foreach($file_acceptable_exts as $ext)
                <option value="{{$ext}}">{{ $ext}}</option>
            @endforeach  
        </select>
    </div>
    <div class="form-group">
        <label for="file_max_size"> Dimention of Files (MB) </label>
        <input type="number" class="form-control" min="0.1" id="file_max_size" name="file_max_size" placeholder="Please type maximum size of files" value="2">
    </div>          
</div>                          
{{-- End File Upload --}}