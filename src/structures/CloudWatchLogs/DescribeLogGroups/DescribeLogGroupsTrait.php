<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeLogGroups;

trait DescribeLogGroupsTrait
{
    /**
     * @param DescribeLogGroupsRequest $args
     * @return DescribeLogGroupsResponse
     */
    public function describeLogGroups(DescribeLogGroupsRequest $args)
    {
        $result = parent::describeLogGroups($args->toArray());
        return new DescribeLogGroupsResponse($result->toArray());
    }
}
