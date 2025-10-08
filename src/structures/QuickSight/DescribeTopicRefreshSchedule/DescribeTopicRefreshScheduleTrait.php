<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopicRefreshSchedule;

trait DescribeTopicRefreshScheduleTrait
{
    /**
     * @param DescribeTopicRefreshScheduleRequest $args
     * @return DescribeTopicRefreshScheduleResponse
     */
    public function describeTopicRefreshSchedule(DescribeTopicRefreshScheduleRequest $args)
    {
        $result = parent::describeTopicRefreshSchedule($args->toArray());
        return new DescribeTopicRefreshScheduleResponse($result->toArray());
    }
}
