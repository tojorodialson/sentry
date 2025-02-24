<?php namespace Codise\Sentry\Sessions;
/**
 * Part of the Sentry package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Sentry
 * @version    2.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2013, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Fuel\Core\Session_Driver as Session;

class FuelPHPSession implements SessionInterface {

	/**
	 * The FuelPHP session driver.
	 *
	 * @param  Fuel\Core\Session_Driver
	 */
	protected $store;

	/**
	 * The key used in the Session.
	 *
	 * @var string
	 */
	protected $key = 'cartalyst_sentry';

	/**
	 * Creates a new FuelPHP Session driver for Sentry.
	 *
	 * @param  \Fuel\Core\Session_Driver  $store
	 * @param  string  $key
	 * @return void
	 */
	public function __construct(Session $store, $key = null)
	{
		$this->store = $store;

		if (isset($key))
		{
			$this->key = $key;
		}
	}

	/**
	 * Returns the session key.
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}

	/**
	 * Put a value in the Sentry session.
	 *
	 * @param  mixed  $value
	 * @return void
	 */
	public function put($value)
	{
		$this->store->set($this->getKey(), $value);
	}

	/**
	 * Get the Sentry session value.
	 *
	 * @return mixed
	 */
	public function get()
	{
		return $this->store->get($this->getKey());
	}

	/**
	 * Remove the Sentry session.
	 *
	 * @return void
	 */
	public function forget()
	{
		$this->store->delete($this->getKey());
	}

}
