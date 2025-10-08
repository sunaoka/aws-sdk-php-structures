<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInputSecurityGroup;

trait DescribeInputSecurityGroupTrait
{
    /**
     * @param DescribeInputSecurityGroupRequest $args
     * @return DescribeInputSecurityGroupResponse
     */
    public function describeInputSecurityGroup(DescribeInputSecurityGroupRequest $args)
    {
        $result = parent::describeInputSecurityGroup($args->toArray());
        return new DescribeInputSecurityGroupResponse($result->toArray());
    }
}
