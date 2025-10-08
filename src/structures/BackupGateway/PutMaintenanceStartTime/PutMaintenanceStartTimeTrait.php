<?php

namespace Sunaoka\Aws\Structures\BackupGateway\PutMaintenanceStartTime;

trait PutMaintenanceStartTimeTrait
{
    /**
     * @param PutMaintenanceStartTimeRequest $args
     * @return PutMaintenanceStartTimeResponse
     */
    public function putMaintenanceStartTime(PutMaintenanceStartTimeRequest $args)
    {
        $result = parent::putMaintenanceStartTime($args->toArray());
        return new PutMaintenanceStartTimeResponse($result->toArray());
    }
}
