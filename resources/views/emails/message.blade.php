@component('mail::message')
Hello,

{{$data['message']}}

Thanks,<br>
{{ $data['name'] }}
<br>
<strong>{{ $data['email'] }}</strong>
@endcomponent
