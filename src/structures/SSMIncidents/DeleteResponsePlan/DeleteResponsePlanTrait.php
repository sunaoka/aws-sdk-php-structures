<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\DeleteResponsePlan;

trait DeleteResponsePlanTrait
{
    /**
     * @param DeleteResponsePlanRequest $args
     * @return DeleteResponsePlanResponse
     */
    public function deleteResponsePlan(DeleteResponsePlanRequest $args)
    {
        $result = parent::deleteResponsePlan($args->toArray());
        return new DeleteResponsePlanResponse($result->toArray());
    }
}
