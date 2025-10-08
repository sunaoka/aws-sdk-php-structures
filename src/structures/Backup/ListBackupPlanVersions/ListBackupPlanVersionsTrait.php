<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupPlanVersions;

trait ListBackupPlanVersionsTrait
{
    /**
     * @param ListBackupPlanVersionsRequest $args
     * @return ListBackupPlanVersionsResponse
     */
    public function listBackupPlanVersions(ListBackupPlanVersionsRequest $args)
    {
        $result = parent::listBackupPlanVersions($args->toArray());
        return new ListBackupPlanVersionsResponse($result->toArray());
    }
}
