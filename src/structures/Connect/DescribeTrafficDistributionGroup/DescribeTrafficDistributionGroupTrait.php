<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeTrafficDistributionGroup;

trait DescribeTrafficDistributionGroupTrait
{
    /**
     * @param DescribeTrafficDistributionGroupRequest $args
     * @return DescribeTrafficDistributionGroupResponse
     */
    public function describeTrafficDistributionGroup(DescribeTrafficDistributionGroupRequest $args)
    {
        $result = parent::describeTrafficDistributionGroup($args->toArray());
        return new DescribeTrafficDistributionGroupResponse($result->toArray());
    }
}
