<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetTagSyncTask;

trait GetTagSyncTaskTrait
{
    /**
     * @param GetTagSyncTaskRequest $args
     * @return GetTagSyncTaskResponse
     */
    public function getTagSyncTask(GetTagSyncTaskRequest $args)
    {
        $result = parent::getTagSyncTask($args->toArray());
        return new GetTagSyncTaskResponse($result->toArray());
    }
}
