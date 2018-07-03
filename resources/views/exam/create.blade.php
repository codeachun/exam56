@extends('layouts.app') 
@section('content')
<h1>{{ __('Exam Create') }}</h1>

{{ bs()->openForm('post', '/exam') }}
    {{ bs()->text('title')->placeholder('請填入測驗標題') }}
    {{ bs()->select('enable', ['1' => '開啟', '0' => '關閉'], '1') }}

    {{ bs()->radio('enable', '啟用')->value('1')->description() }}


{{ bs()->closeForm() }} 
@stop