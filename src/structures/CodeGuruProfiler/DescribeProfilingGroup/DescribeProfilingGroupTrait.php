<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\DescribeProfilingGroup;

trait DescribeProfilingGroupTrait
{
    /**
     * @param DescribeProfilingGroupRequest $args
     * @return DescribeProfilingGroupResponse
     */
    public function describeProfilingGroup(DescribeProfilingGroupRequest $args)
    {
        $result = parent::describeProfilingGroup($args->toArray());
        return new DescribeProfilingGroupResponse($result->toArray());
    }
}
