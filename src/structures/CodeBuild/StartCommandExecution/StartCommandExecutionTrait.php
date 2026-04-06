<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartCommandExecution;

trait StartCommandExecutionTrait
{
    /**
     * @param StartCommandExecutionRequest $args
     * @return StartCommandExecutionResponse
     */
    public function startCommandExecution(StartCommandExecutionRequest $args)
    {
        $result = parent::startCommandExecution($args->toArray());
        return new StartCommandExecutionResponse($result->toArray());
    }
}
