<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupAccessPoints;

trait ListBackupAccessPointsTrait
{
    /**
     * @param ListBackupAccessPointsRequest $args
     * @return ListBackupAccessPointsResponse
     */
    public function listBackupAccessPoints(ListBackupAccessPointsRequest $args)
    {
        $result = parent::listBackupAccessPoints($args->toArray());
        return new ListBackupAccessPointsResponse($result->toArray());
    }
}
