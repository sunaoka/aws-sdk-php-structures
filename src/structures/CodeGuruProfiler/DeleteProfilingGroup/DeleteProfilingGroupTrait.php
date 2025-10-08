<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\DeleteProfilingGroup;

trait DeleteProfilingGroupTrait
{
    /**
     * @param DeleteProfilingGroupRequest $args
     * @return DeleteProfilingGroupResponse
     */
    public function deleteProfilingGroup(DeleteProfilingGroupRequest $args)
    {
        $result = parent::deleteProfilingGroup($args->toArray());
        return new DeleteProfilingGroupResponse($result->toArray());
    }
}
