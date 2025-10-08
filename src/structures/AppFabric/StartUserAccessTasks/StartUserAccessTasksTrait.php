<?php

namespace Sunaoka\Aws\Structures\AppFabric\StartUserAccessTasks;

trait StartUserAccessTasksTrait
{
    /**
     * @param StartUserAccessTasksRequest $args
     * @return StartUserAccessTasksResponse
     */
    public function startUserAccessTasks(StartUserAccessTasksRequest $args)
    {
        $result = parent::startUserAccessTasks($args->toArray());
        return new StartUserAccessTasksResponse($result->toArray());
    }
}
