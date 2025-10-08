<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUserGroups;

trait DescribeUserGroupsTrait
{
    /**
     * @param DescribeUserGroupsRequest $args
     * @return DescribeUserGroupsResponse
     */
    public function describeUserGroups(DescribeUserGroupsRequest $args)
    {
        $result = parent::describeUserGroups($args->toArray());
        return new DescribeUserGroupsResponse($result->toArray());
    }
}
