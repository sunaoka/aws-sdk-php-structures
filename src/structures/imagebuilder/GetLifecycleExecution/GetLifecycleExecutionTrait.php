<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetLifecycleExecution;

trait GetLifecycleExecutionTrait
{
    /**
     * @param GetLifecycleExecutionRequest $args
     * @return GetLifecycleExecutionResponse
     */
    public function getLifecycleExecution(GetLifecycleExecutionRequest $args)
    {
        $result = parent::getLifecycleExecution($args->toArray());
        return new GetLifecycleExecutionResponse($result->toArray());
    }
}
