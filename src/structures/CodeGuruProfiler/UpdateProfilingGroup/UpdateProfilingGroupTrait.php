<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\UpdateProfilingGroup;

trait UpdateProfilingGroupTrait
{
    /**
     * @param UpdateProfilingGroupRequest $args
     * @return UpdateProfilingGroupResponse
     */
    public function updateProfilingGroup(UpdateProfilingGroupRequest $args)
    {
        $result = parent::updateProfilingGroup($args->toArray());
        return new UpdateProfilingGroupResponse($result->toArray());
    }
}
