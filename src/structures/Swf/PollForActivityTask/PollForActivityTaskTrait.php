<?php

namespace Sunaoka\Aws\Structures\Swf\PollForActivityTask;

trait PollForActivityTaskTrait
{
    /**
     * @param PollForActivityTaskRequest $args
     * @return PollForActivityTaskResponse
     */
    public function pollForActivityTask(PollForActivityTaskRequest $args)
    {
        $result = parent::pollForActivityTask($args->toArray());
        return new PollForActivityTaskResponse($result->toArray());
    }
}
