<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeIpGroups;

trait DescribeIpGroupsTrait
{
    /**
     * @param DescribeIpGroupsRequest $args
     * @return DescribeIpGroupsResponse
     */
    public function describeIpGroups(DescribeIpGroupsRequest $args)
    {
        $result = parent::describeIpGroups($args->toArray());
        return new DescribeIpGroupsResponse($result->toArray());
    }
}
