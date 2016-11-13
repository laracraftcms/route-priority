<?php namespace Langaner\RoutePriority;

use Illuminate\Routing\Route as IlluminateRoute;
use Illuminate\Http\Request;
use Illuminate\Routing\ControllerDispatcher;

class Route extends IlluminateRoute
{
	/**
	 * @var int
	 */
	protected $priority = Router::DEFAULT_PRIORITY;
	
	/**
	 * @return int
	 */
	public function getPriority()
	{
		return $this->priority;
	}

	/**
	 * @param int $priority
	 */
	public function setPriority($priority)
	{
		$this->priority = $priority;
	}
}
