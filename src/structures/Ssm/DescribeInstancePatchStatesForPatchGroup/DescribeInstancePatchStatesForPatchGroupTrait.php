<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstancePatchStatesForPatchGroup;

trait DescribeInstancePatchStatesForPatchGroupTrait
{
    /**
     * @param DescribeInstancePatchStatesForPatchGroupRequest $args
     * @return DescribeInstancePatchStatesForPatchGroupResponse
     */
    public function describeInstancePatchStatesForPatchGroup(DescribeInstancePatchStatesForPatchGroupRequest $args)
    {
        $result = parent::describeInstancePatchStatesForPatchGroup($args->toArray());
        return new DescribeInstancePatchStatesForPatchGroupResponse($result->toArray());
    }
}
