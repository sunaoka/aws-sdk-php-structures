<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetUsageForecast;

trait GetUsageForecastTrait
{
    /**
     * @param GetUsageForecastRequest $args
     * @return GetUsageForecastResponse
     */
    public function getUsageForecast(GetUsageForecastRequest $args)
    {
        $result = parent::getUsageForecast($args->toArray());
        return new GetUsageForecastResponse($result->toArray());
    }
}
