<?php

namespace Sunaoka\Aws\Structures\Omics\GetRunTask;

trait GetRunTaskTrait
{
    /**
     * @param GetRunTaskRequest $args
     * @return GetRunTaskResponse
     */
    public function getRunTask(GetRunTaskRequest $args)
    {
        $result = parent::getRunTask($args->toArray());
        return new GetRunTaskResponse($result->toArray());
    }
}
