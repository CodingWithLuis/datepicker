<div wire:ignore x-data x-init="() => {
	const datepicker=flatpickr($refs.input, {
        dateFormat: 'd/m/Y',
        locale: 'es'
	})
} ">
    <input {{$attributes}} x-ref="input" type="text" class="form-control" readonly />
</div>
