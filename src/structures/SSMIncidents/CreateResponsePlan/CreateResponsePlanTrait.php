<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateResponsePlan;

trait CreateResponsePlanTrait
{
    /**
     * @param CreateResponsePlanRequest $args
     * @return CreateResponsePlanResponse
     */
    public function createResponsePlan(CreateResponsePlanRequest $args)
    {
        $result = parent::createResponsePlan($args->toArray());
        return new CreateResponsePlanResponse($result->toArray());
    }
}
