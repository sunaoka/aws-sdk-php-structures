<?php

namespace Sunaoka\Aws\Structures\Lambda\StopDurableExecution;

trait StopDurableExecutionTrait
{
    /**
     * @param StopDurableExecutionRequest $args
     * @return StopDurableExecutionResponse
     */
    public function stopDurableExecution(StopDurableExecutionRequest $args)
    {
        $result = parent::stopDurableExecution($args->toArray());
        return new StopDurableExecutionResponse($result->toArray());
    }
}
