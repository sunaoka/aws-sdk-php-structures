<?php

namespace Sunaoka\Aws\Structures\Iot\GetCommandExecution;

trait GetCommandExecutionTrait
{
    /**
     * @param GetCommandExecutionRequest $args
     * @return GetCommandExecutionResponse
     */
    public function getCommandExecution(GetCommandExecutionRequest $args)
    {
        $result = parent::getCommandExecution($args->toArray());
        return new GetCommandExecutionResponse($result->toArray());
    }
}
