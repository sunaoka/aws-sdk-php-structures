<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CancelLifecycleExecution;

trait CancelLifecycleExecutionTrait
{
    /**
     * @param CancelLifecycleExecutionRequest $args
     * @return CancelLifecycleExecutionResponse
     */
    public function cancelLifecycleExecution(CancelLifecycleExecutionRequest $args)
    {
        $result = parent::cancelLifecycleExecution($args->toArray());
        return new CancelLifecycleExecutionResponse($result->toArray());
    }
}
