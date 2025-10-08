<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroups;

trait DescribeOptionGroupsTrait
{
    /**
     * @param DescribeOptionGroupsRequest $args
     * @return DescribeOptionGroupsResponse
     */
    public function describeOptionGroups(DescribeOptionGroupsRequest $args)
    {
        $result = parent::describeOptionGroups($args->toArray());
        return new DescribeOptionGroupsResponse($result->toArray());
    }
}
