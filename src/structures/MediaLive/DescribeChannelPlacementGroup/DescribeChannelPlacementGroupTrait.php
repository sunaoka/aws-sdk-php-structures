<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannelPlacementGroup;

trait DescribeChannelPlacementGroupTrait
{
    /**
     * @param DescribeChannelPlacementGroupRequest $args
     * @return DescribeChannelPlacementGroupResponse
     */
    public function describeChannelPlacementGroup(DescribeChannelPlacementGroupRequest $args)
    {
        $result = parent::describeChannelPlacementGroup($args->toArray());
        return new DescribeChannelPlacementGroupResponse($result->toArray());
    }
}
