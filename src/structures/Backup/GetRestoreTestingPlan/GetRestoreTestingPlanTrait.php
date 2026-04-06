<?php

namespace Sunaoka\Aws\Structures\Backup\GetRestoreTestingPlan;

trait GetRestoreTestingPlanTrait
{
    /**
     * @param GetRestoreTestingPlanRequest $args
     * @return GetRestoreTestingPlanResponse
     */
    public function getRestoreTestingPlan(GetRestoreTestingPlanRequest $args)
    {
        $result = parent::getRestoreTestingPlan($args->toArray());
        return new GetRestoreTestingPlanResponse($result->toArray());
    }
}
