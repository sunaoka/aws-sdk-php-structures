<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeProtectionGroup;

trait DescribeProtectionGroupTrait
{
    /**
     * @param DescribeProtectionGroupRequest $args
     * @return DescribeProtectionGroupResponse
     */
    public function describeProtectionGroup(DescribeProtectionGroupRequest $args)
    {
        $result = parent::describeProtectionGroup($args->toArray());
        return new DescribeProtectionGroupResponse($result->toArray());
    }
}
