<?php

namespace Sunaoka\Aws\Structures\Ssm\StartChangeRequestExecution;

trait StartChangeRequestExecutionTrait
{
    /**
     * @param StartChangeRequestExecutionRequest $args
     * @return StartChangeRequestExecutionResponse
     */
    public function startChangeRequestExecution(StartChangeRequestExecutionRequest $args)
    {
        $result = parent::startChangeRequestExecution($args->toArray());
        return new StartChangeRequestExecutionResponse($result->toArray());
    }
}
