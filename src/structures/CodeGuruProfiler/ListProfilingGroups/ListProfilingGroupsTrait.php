<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ListProfilingGroups;

trait ListProfilingGroupsTrait
{
    /**
     * @param ListProfilingGroupsRequest $args
     * @return ListProfilingGroupsResponse
     */
    public function listProfilingGroups(ListProfilingGroupsRequest $args)
    {
        $result = parent::listProfilingGroups($args->toArray());
        return new ListProfilingGroupsResponse($result->toArray());
    }
}
