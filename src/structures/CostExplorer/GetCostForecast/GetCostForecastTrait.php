<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostForecast;

trait GetCostForecastTrait
{
    /**
     * @param GetCostForecastRequest $args
     * @return GetCostForecastResponse
     */
    public function getCostForecast(GetCostForecastRequest $args)
    {
        $result = parent::getCostForecast($args->toArray());
        return new GetCostForecastResponse($result->toArray());
    }
}
