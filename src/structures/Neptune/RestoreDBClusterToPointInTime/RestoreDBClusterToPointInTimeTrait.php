<?php

namespace Sunaoka\Aws\Structures\Neptune\RestoreDBClusterToPointInTime;

trait RestoreDBClusterToPointInTimeTrait
{
    /**
     * @param RestoreDBClusterToPointInTimeRequest $args
     * @return RestoreDBClusterToPointInTimeResponse
     */
    public function restoreDBClusterToPointInTime(RestoreDBClusterToPointInTimeRequest $args)
    {
        $result = parent::restoreDBClusterToPointInTime($args->toArray());
        return new RestoreDBClusterToPointInTimeResponse($result->toArray());
    }
}
