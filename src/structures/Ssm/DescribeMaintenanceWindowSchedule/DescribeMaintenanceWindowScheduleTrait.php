<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowSchedule;

trait DescribeMaintenanceWindowScheduleTrait
{
    /**
     * @param DescribeMaintenanceWindowScheduleRequest $args
     * @return DescribeMaintenanceWindowScheduleResponse
     */
    public function describeMaintenanceWindowSchedule(DescribeMaintenanceWindowScheduleRequest $args)
    {
        $result = parent::describeMaintenanceWindowSchedule($args->toArray());
        return new DescribeMaintenanceWindowScheduleResponse($result->toArray());
    }
}
