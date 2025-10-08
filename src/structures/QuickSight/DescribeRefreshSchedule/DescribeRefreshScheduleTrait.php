<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeRefreshSchedule;

trait DescribeRefreshScheduleTrait
{
    /**
     * @param DescribeRefreshScheduleRequest $args
     * @return DescribeRefreshScheduleResponse
     */
    public function describeRefreshSchedule(DescribeRefreshScheduleRequest $args)
    {
        $result = parent::describeRefreshSchedule($args->toArray());
        return new DescribeRefreshScheduleResponse($result->toArray());
    }
}
