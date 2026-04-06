<?php

namespace Sunaoka\Aws\Structures\Backup\CreateRestoreTestingPlan;

trait CreateRestoreTestingPlanTrait
{
    /**
     * @param CreateRestoreTestingPlanRequest $args
     * @return CreateRestoreTestingPlanResponse
     */
    public function createRestoreTestingPlan(CreateRestoreTestingPlanRequest $args)
    {
        $result = parent::createRestoreTestingPlan($args->toArray());
        return new CreateRestoreTestingPlanResponse($result->toArray());
    }
}
