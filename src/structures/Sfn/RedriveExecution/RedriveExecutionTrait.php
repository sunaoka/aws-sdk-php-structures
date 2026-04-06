<?php

namespace Sunaoka\Aws\Structures\Sfn\RedriveExecution;

trait RedriveExecutionTrait
{
    /**
     * @param RedriveExecutionRequest $args
     * @return RedriveExecutionResponse
     */
    public function redriveExecution(RedriveExecutionRequest $args)
    {
        $result = parent::redriveExecution($args->toArray());
        return new RedriveExecutionResponse($result->toArray());
    }
}
