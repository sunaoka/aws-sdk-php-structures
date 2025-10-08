<?php

namespace Sunaoka\Aws\Structures\Ecs\ExecuteCommand;

trait ExecuteCommandTrait
{
    /**
     * @param ExecuteCommandRequest $args
     * @return ExecuteCommandResponse
     */
    public function executeCommand(ExecuteCommandRequest $args)
    {
        $result = parent::executeCommand($args->toArray());
        return new ExecuteCommandResponse($result->toArray());
    }
}
