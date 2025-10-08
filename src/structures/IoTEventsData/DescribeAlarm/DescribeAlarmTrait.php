<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm;

trait DescribeAlarmTrait
{
    /**
     * @param DescribeAlarmRequest $args
     * @return DescribeAlarmResponse
     */
    public function describeAlarm(DescribeAlarmRequest $args)
    {
        $result = parent::describeAlarm($args->toArray());
        return new DescribeAlarmResponse($result->toArray());
    }
}
