<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeGroup;

trait DescribeGroupTrait
{
    /**
     * @param DescribeGroupRequest $args
     * @return DescribeGroupResponse
     */
    public function describeGroup(DescribeGroupRequest $args)
    {
        $result = parent::describeGroup($args->toArray());
        return new DescribeGroupResponse($result->toArray());
    }
}
