<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetExecution;

trait GetExecutionTrait
{
    /**
     * @param GetExecutionRequest $args
     * @return GetExecutionResponse
     */
    public function getExecution(GetExecutionRequest $args)
    {
        $result = parent::getExecution($args->toArray());
        return new GetExecutionResponse($result->toArray());
    }
}
