<?php

namespace Sunaoka\Aws\Structures\Glue\GetPlan;

trait GetPlanTrait
{
    /**
     * @param GetPlanRequest $args
     * @return GetPlanResponse
     */
    public function getPlan(GetPlanRequest $args)
    {
        $result = parent::getPlan($args->toArray());
        return new GetPlanResponse($result->toArray());
    }
}
