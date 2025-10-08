<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPricingPlan;

trait GetPricingPlanTrait
{
    /**
     * @param GetPricingPlanRequest $args
     * @return GetPricingPlanResponse
     */
    public function getPricingPlan(GetPricingPlanRequest $args)
    {
        $result = parent::getPricingPlan($args->toArray());
        return new GetPricingPlanResponse($result->toArray());
    }
}
