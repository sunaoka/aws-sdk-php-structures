<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingGroup;

trait DescribeThingGroupTrait
{
    /**
     * @param DescribeThingGroupRequest $args
     * @return DescribeThingGroupResponse
     */
    public function describeThingGroup(DescribeThingGroupRequest $args)
    {
        $result = parent::describeThingGroup($args->toArray());
        return new DescribeThingGroupResponse($result->toArray());
    }
}
