<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeMaintenanceStartTime;

trait DescribeMaintenanceStartTimeTrait
{
    /**
     * @param DescribeMaintenanceStartTimeRequest $args
     * @return DescribeMaintenanceStartTimeResponse
     */
    public function describeMaintenanceStartTime(DescribeMaintenanceStartTimeRequest $args)
    {
        $result = parent::describeMaintenanceStartTime($args->toArray());
        return new DescribeMaintenanceStartTimeResponse($result->toArray());
    }
}
