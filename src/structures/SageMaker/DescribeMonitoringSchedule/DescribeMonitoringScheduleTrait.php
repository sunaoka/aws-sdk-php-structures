<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeMonitoringSchedule;

trait DescribeMonitoringScheduleTrait
{
    /**
     * @param DescribeMonitoringScheduleRequest $args
     * @return DescribeMonitoringScheduleResponse
     */
    public function describeMonitoringSchedule(DescribeMonitoringScheduleRequest $args)
    {
        $result = parent::describeMonitoringSchedule($args->toArray());
        return new DescribeMonitoringScheduleResponse($result->toArray());
    }
}
