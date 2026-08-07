<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupAccessPointsByRecoveryPoint;

trait ListBackupAccessPointsByRecoveryPointTrait
{
    /**
     * @param ListBackupAccessPointsByRecoveryPointRequest $args
     * @return ListBackupAccessPointsByRecoveryPointResponse
     */
    public function listBackupAccessPointsByRecoveryPoint(ListBackupAccessPointsByRecoveryPointRequest $args)
    {
        $result = parent::listBackupAccessPointsByRecoveryPoint($args->toArray());
        return new ListBackupAccessPointsByRecoveryPointResponse($result->toArray());
    }
}
