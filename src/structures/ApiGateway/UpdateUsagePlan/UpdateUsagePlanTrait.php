<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateUsagePlan;

trait UpdateUsagePlanTrait
{
    /**
     * @param UpdateUsagePlanRequest $args
     * @return UpdateUsagePlanResponse
     */
    public function updateUsagePlan(UpdateUsagePlanRequest $args)
    {
        $result = parent::updateUsagePlan($args->toArray());
        return new UpdateUsagePlanResponse($result->toArray());
    }
}
