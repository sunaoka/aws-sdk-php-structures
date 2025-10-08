<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupPlans;

trait ListBackupPlansTrait
{
    /**
     * @param ListBackupPlansRequest $args
     * @return ListBackupPlansResponse
     */
    public function listBackupPlans(ListBackupPlansRequest $args)
    {
        $result = parent::listBackupPlans($args->toArray());
        return new ListBackupPlansResponse($result->toArray());
    }
}
