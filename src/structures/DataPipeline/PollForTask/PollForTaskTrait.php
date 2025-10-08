<?php

namespace Sunaoka\Aws\Structures\DataPipeline\PollForTask;

trait PollForTaskTrait
{
    /**
     * @param PollForTaskRequest $args
     * @return PollForTaskResponse
     */
    public function pollForTask(PollForTaskRequest $args)
    {
        $result = parent::pollForTask($args->toArray());
        return new PollForTaskResponse($result->toArray());
    }
}
