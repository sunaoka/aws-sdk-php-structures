<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlan;

trait GetBackupPlanTrait
{
    /**
     * @param GetBackupPlanRequest $args
     * @return GetBackupPlanResponse
     */
    public function getBackupPlan(GetBackupPlanRequest $args)
    {
        $result = parent::getBackupPlan($args->toArray());
        return new GetBackupPlanResponse($result->toArray());
    }
}
