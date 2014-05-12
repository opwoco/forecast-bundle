<?php

namespace opwoco\ForecastBundle\Service;

class ForecastService {
	private $forecast_url;

	public function __construct($forecast_url) {
		$this->forecast_url = $forecast_url;

		// Get api key from config
	}

	public function getForecastByLocation($location) {

	}
	
	public function getForecastByCoordinates($lat, $lng) {

	}
}