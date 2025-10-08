<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateBackupPlan;

trait UpdateBackupPlanTrait
{
    /**
     * @param UpdateBackupPlanRequest $args
     * @return UpdateBackupPlanResponse
     */
    public function updateBackupPlan(UpdateBackupPlanRequest $args)
    {
        $result = parent::updateBackupPlan($args->toArray());
        return new UpdateBackupPlanResponse($result->toArray());
    }
}
