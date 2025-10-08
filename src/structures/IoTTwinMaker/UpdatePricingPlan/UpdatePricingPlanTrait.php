<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdatePricingPlan;

trait UpdatePricingPlanTrait
{
    /**
     * @param UpdatePricingPlanRequest $args
     * @return UpdatePricingPlanResponse
     */
    public function updatePricingPlan(UpdatePricingPlanRequest $args)
    {
        $result = parent::updatePricingPlan($args->toArray());
        return new UpdatePricingPlanResponse($result->toArray());
    }
}
