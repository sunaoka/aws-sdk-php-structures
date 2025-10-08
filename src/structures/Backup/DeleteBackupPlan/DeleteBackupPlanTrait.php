<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupPlan;

trait DeleteBackupPlanTrait
{
    /**
     * @param DeleteBackupPlanRequest $args
     * @return DeleteBackupPlanResponse
     */
    public function deleteBackupPlan(DeleteBackupPlanRequest $args)
    {
        $result = parent::deleteBackupPlan($args->toArray());
        return new DeleteBackupPlanResponse($result->toArray());
    }
}
