<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMaintenanceJobStatus;

trait GetTableMaintenanceJobStatusTrait
{
    /**
     * @param GetTableMaintenanceJobStatusRequest $args
     * @return GetTableMaintenanceJobStatusResponse
     */
    public function getTableMaintenanceJobStatus(GetTableMaintenanceJobStatusRequest $args)
    {
        $result = parent::getTableMaintenanceJobStatus($args->toArray());
        return new GetTableMaintenanceJobStatusResponse($result->toArray());
    }
}
