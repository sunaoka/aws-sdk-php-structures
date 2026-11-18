<?php

namespace Sunaoka\Aws\Structures\Lambda\PauseDurableExecution;

trait PauseDurableExecutionTrait
{
    /**
     * @param PauseDurableExecutionRequest $args
     * @return PauseDurableExecutionResponse
     */
    public function pauseDurableExecution(PauseDurableExecutionRequest $args)
    {
        $result = parent::pauseDurableExecution($args->toArray());
        return new PauseDurableExecutionResponse($result->toArray());
    }
}
