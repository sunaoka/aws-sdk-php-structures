<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\GetScalingPlanResourceForecastData;

trait GetScalingPlanResourceForecastDataTrait
{
    /**
     * @param GetScalingPlanResourceForecastDataRequest $args
     * @return GetScalingPlanResourceForecastDataResponse
     */
    public function getScalingPlanResourceForecastData(GetScalingPlanResourceForecastDataRequest $args)
    {
        $result = parent::getScalingPlanResourceForecastData($args->toArray());
        return new GetScalingPlanResourceForecastDataResponse($result->toArray());
    }
}
