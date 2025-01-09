<?php

namespace Sunaoka\Aws\Structures\AutoScaling\GetPredictiveScalingForecast;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\LoadForecast> $LoadForecast
 * @property Shapes\CapacityForecast $CapacityForecast
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class GetPredictiveScalingForecastResponse extends Response
{
}
