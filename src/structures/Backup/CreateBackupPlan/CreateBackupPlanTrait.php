<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupPlan;

trait CreateBackupPlanTrait
{
    /**
     * @param CreateBackupPlanRequest $args
     * @return CreateBackupPlanResponse
     */
    public function createBackupPlan(CreateBackupPlanRequest $args)
    {
        $result = parent::createBackupPlan($args->toArray());
        return new CreateBackupPlanResponse($result->toArray());
    }
}
