<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeResourceGroups;

trait DescribeResourceGroupsTrait
{
    /**
     * @param DescribeResourceGroupsRequest $args
     * @return DescribeResourceGroupsResponse
     */
    public function describeResourceGroups(DescribeResourceGroupsRequest $args)
    {
        $result = parent::describeResourceGroups($args->toArray());
        return new DescribeResourceGroupsResponse($result->toArray());
    }
}
