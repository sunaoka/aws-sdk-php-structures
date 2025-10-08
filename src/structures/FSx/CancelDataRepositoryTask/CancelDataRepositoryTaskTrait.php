<?php

namespace Sunaoka\Aws\Structures\FSx\CancelDataRepositoryTask;

trait CancelDataRepositoryTaskTrait
{
    /**
     * @param CancelDataRepositoryTaskRequest $args
     * @return CancelDataRepositoryTaskResponse
     */
    public function cancelDataRepositoryTask(CancelDataRepositoryTaskRequest $args)
    {
        $result = parent::cancelDataRepositoryTask($args->toArray());
        return new CancelDataRepositoryTaskResponse($result->toArray());
    }
}
