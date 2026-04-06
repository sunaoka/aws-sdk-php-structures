<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\GetPredictiveScalingForecast;

trait GetPredictiveScalingForecastTrait
{
    /**
     * @param GetPredictiveScalingForecastRequest $args
     * @return GetPredictiveScalingForecastResponse
     */
    public function getPredictiveScalingForecast(GetPredictiveScalingForecastRequest $args)
    {
        $result = parent::getPredictiveScalingForecast($args->toArray());
        return new GetPredictiveScalingForecastResponse($result->toArray());
    }
}
