<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarms;

trait DescribeAlarmsTrait
{
    /**
     * @param DescribeAlarmsRequest $args
     * @return DescribeAlarmsResponse
     */
    public function describeAlarms(DescribeAlarmsRequest $args)
    {
        $result = parent::describeAlarms($args->toArray());
        return new DescribeAlarmsResponse($result->toArray());
    }
}
