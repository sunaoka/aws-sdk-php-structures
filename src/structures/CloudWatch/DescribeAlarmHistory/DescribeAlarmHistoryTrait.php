<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmHistory;

trait DescribeAlarmHistoryTrait
{
    /**
     * @param DescribeAlarmHistoryRequest $args
     * @return DescribeAlarmHistoryResponse
     */
    public function describeAlarmHistory(DescribeAlarmHistoryRequest $args)
    {
        $result = parent::describeAlarmHistory($args->toArray());
        return new DescribeAlarmHistoryResponse($result->toArray());
    }
}
