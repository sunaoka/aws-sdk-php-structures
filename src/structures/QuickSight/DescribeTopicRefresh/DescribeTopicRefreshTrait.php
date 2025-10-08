<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopicRefresh;

trait DescribeTopicRefreshTrait
{
    /**
     * @param DescribeTopicRefreshRequest $args
     * @return DescribeTopicRefreshResponse
     */
    public function describeTopicRefresh(DescribeTopicRefreshRequest $args)
    {
        $result = parent::describeTopicRefresh($args->toArray());
        return new DescribeTopicRefreshResponse($result->toArray());
    }
}
