<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBInstanceToPointInTime;

trait RestoreDBInstanceToPointInTimeTrait
{
    /**
     * @param RestoreDBInstanceToPointInTimeRequest $args
     * @return RestoreDBInstanceToPointInTimeResponse
     */
    public function restoreDBInstanceToPointInTime(RestoreDBInstanceToPointInTimeRequest $args)
    {
        $result = parent::restoreDBInstanceToPointInTime($args->toArray());
        return new RestoreDBInstanceToPointInTimeResponse($result->toArray());
    }
}
