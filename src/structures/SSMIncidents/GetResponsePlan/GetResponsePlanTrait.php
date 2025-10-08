<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetResponsePlan;

trait GetResponsePlanTrait
{
    /**
     * @param GetResponsePlanRequest $args
     * @return GetResponsePlanResponse
     */
    public function getResponsePlan(GetResponsePlanRequest $args)
    {
        $result = parent::getResponsePlan($args->toArray());
        return new GetResponsePlanResponse($result->toArray());
    }
}
