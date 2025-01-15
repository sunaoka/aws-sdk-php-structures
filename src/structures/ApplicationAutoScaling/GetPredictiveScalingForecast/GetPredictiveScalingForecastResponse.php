<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\GetPredictiveScalingForecast;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\LoadForecast>|null $LoadForecast
 * @property Shapes\CapacityForecast|null $CapacityForecast
 * @property \Aws\Api\DateTimeResult|null $UpdateTime
 */
class GetPredictiveScalingForecastResponse extends Response
{
}
