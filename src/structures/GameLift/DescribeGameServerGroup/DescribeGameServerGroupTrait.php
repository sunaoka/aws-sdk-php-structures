<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameServerGroup;

trait DescribeGameServerGroupTrait
{
    /**
     * @param DescribeGameServerGroupRequest $args
     * @return DescribeGameServerGroupResponse
     */
    public function describeGameServerGroup(DescribeGameServerGroupRequest $args)
    {
        $result = parent::describeGameServerGroup($args->toArray());
        return new DescribeGameServerGroupResponse($result->toArray());
    }
}
