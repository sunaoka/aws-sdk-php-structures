<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlan;

trait GetUsagePlanTrait
{
    /**
     * @param GetUsagePlanRequest $args
     * @return GetUsagePlanResponse
     */
    public function getUsagePlan(GetUsagePlanRequest $args)
    {
        $result = parent::getUsagePlan($args->toArray());
        return new GetUsagePlanResponse($result->toArray());
    }
}
