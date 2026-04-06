<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRestoreTestingPlan;

trait UpdateRestoreTestingPlanTrait
{
    /**
     * @param UpdateRestoreTestingPlanRequest $args
     * @return UpdateRestoreTestingPlanResponse
     */
    public function updateRestoreTestingPlan(UpdateRestoreTestingPlanRequest $args)
    {
        $result = parent::updateRestoreTestingPlan($args->toArray());
        return new UpdateRestoreTestingPlanResponse($result->toArray());
    }
}
