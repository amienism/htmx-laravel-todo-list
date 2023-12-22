
@if ($type === 'info')
<div class="p-4 my-4 text-sm rounded-lg text-sky-600 bg-blue-50 border border-blue-200" role="alert">
    {{ $message }}
  </div>
@endif
@if ($type === 'success')
<div class="p-4 my-4 text-sm rounded-lg text-green-600 bg-green-50 border border-green-200" role="alert">
    {{ $message }}
  </div>
@endif
@if ($type === 'warning')
<div class="p-4 my-4 text-sm rounded-lg text-yellow-600 bg-yellow-50 border border-yellow-200" role="alert">
    {{ $message }}
  </div>
@endif
@if ($type === 'error')
<div class="p-4 my-4 text-sm rounded-lg text-red-600 bg-red-50 border border-red-200" role="alert">
    {{ $message }}
  </div>
@endif