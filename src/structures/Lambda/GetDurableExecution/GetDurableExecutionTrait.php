<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecution;

trait GetDurableExecutionTrait
{
    /**
     * @param GetDurableExecutionRequest $args
     * @return GetDurableExecutionResponse
     */
    public function getDurableExecution(GetDurableExecutionRequest $args)
    {
        $result = parent::getDurableExecution($args->toArray());
        return new GetDurableExecutionResponse($result->toArray());
    }
}
