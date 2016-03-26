<?php

if (! function_exists('form_error')) {
	/**
	 * Generate an error message.
	 *
	 * @param  string  $name
	 * @return string
	 */
	function form_error($name)
	{
		$view = 'vendor.sukohi.form-error.form_error';

		if(!view()->exists($view)) {

			throw new \Exception('ViewNotFoundException');

		}

		return view($view, ['name' => $name])->render();
	}
}