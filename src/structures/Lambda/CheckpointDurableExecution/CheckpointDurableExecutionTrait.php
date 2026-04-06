<?php

namespace Sunaoka\Aws\Structures\Lambda\CheckpointDurableExecution;

trait CheckpointDurableExecutionTrait
{
    /**
     * @param CheckpointDurableExecutionRequest $args
     * @return CheckpointDurableExecutionResponse
     */
    public function checkpointDurableExecution(CheckpointDurableExecutionRequest $args)
    {
        $result = parent::checkpointDurableExecution($args->toArray());
        return new CheckpointDurableExecutionResponse($result->toArray());
    }
}
