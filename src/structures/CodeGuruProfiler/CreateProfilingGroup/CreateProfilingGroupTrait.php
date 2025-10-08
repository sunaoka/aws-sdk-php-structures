<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\CreateProfilingGroup;

trait CreateProfilingGroupTrait
{
    /**
     * @param CreateProfilingGroupRequest $args
     * @return CreateProfilingGroupResponse
     */
    public function createProfilingGroup(CreateProfilingGroupRequest $args)
    {
        $result = parent::createProfilingGroup($args->toArray());
        return new CreateProfilingGroupResponse($result->toArray());
    }
}
