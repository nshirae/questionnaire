@extends('layout.form')

@section('content')
    <form action="{{ url('/form/index')}}" method="post" class="row" id="form">
        {{ csrf_field() }}
        <input type="hidden" name="store" value="1">
        <div class="col-sm-8 col-sm-offset-2 pad-lr-10">
            <div class="form-group text-center">
                <label for="q1" class="">おなまえ（ニックネームでも可）</label>
                <div class="text-center">
                    <input type="text" id="name" name="name" class="form-control" autofocus required>
                </div>
            </div>
            <br />
            <div class="form-group text-center">
                <label for="q1" class="">新郎新婦へお祝いメッセージ</label>
                <div class="text-center">
                    <textarea type="text" id="free" name="free" class="form-control"></textarea>
                </div>
            </div>
            <br />
            <div class="form-group text-center">
                <label class="">新婚旅行の行き先は？</label>
                <div class="bd-example">
                    <div class="custom-control custom-radio custom-control-inline col-xs-6" style="padding-bottom:1em;">
                        <div class="text-center" style="padding:4px;">
                            <img src="img/umi_beach.png" style="width:98%;" onClick="selectIndexImg(0);">
                        </div>
                        <div class="text-center">
                            <input type="radio" name="answer" id="answer_1" value="1" class="custom-control-input" required>
                            <label class="custom-control-label radio-label" for="answer_1">ハワイ)お嫁さん</label>
                        </div>
                    </div>
                    
                    <div class="custom-control custom-radio custom-control-inline col-xs-6">
                        <div class="text-center" style="padding:4px;">
                            <img src="img/bg_oshiro_castle.jpg" style="width:98%;" onClick="selectIndexImg(1);">
                        </div>
                        <div class="text-center">
                            <input type="radio" name="answer" id="answer_2" value="2" class="custom-control-input">
                            <label class="custom-control-label radio-label" for="answer_2">ヨーロッパ)旦那さん</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <br />
            <div class="btn-group grid">
                <button type="submit" class="btn btn-submit">送信する</button>
            </div>
        </div>
    </form>

    <SCRIPT type="text/javascript"> 
        function selectIndexImg(chkimg) {
            document.all.answer[chkimg].checked = true;
        }

        //2重送信防止
        document.getElementById('form').addEventListener('submit', function(){
            var elements = this.elements;
            for (var i = 0; i < elements.length; i++) {
                if (elements[i].type == 'submit') {
                    elements[i].disabled = true;
                }
            }
        });
    </SCRIPT>

@endsection