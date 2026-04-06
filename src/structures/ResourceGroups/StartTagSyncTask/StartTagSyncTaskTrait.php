<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\StartTagSyncTask;

trait StartTagSyncTaskTrait
{
    /**
     * @param StartTagSyncTaskRequest $args
     * @return StartTagSyncTaskResponse
     */
    public function startTagSyncTask(StartTagSyncTaskRequest $args)
    {
        $result = parent::startTagSyncTask($args->toArray());
        return new StartTagSyncTaskResponse($result->toArray());
    }
}
