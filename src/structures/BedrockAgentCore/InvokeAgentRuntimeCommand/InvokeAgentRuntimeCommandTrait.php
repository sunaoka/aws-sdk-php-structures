<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeAgentRuntimeCommand;

trait InvokeAgentRuntimeCommandTrait
{
    /**
     * @param InvokeAgentRuntimeCommandRequest $args
     * @return InvokeAgentRuntimeCommandResponse
     */
    public function invokeAgentRuntimeCommand(InvokeAgentRuntimeCommandRequest $args)
    {
        $result = parent::invokeAgentRuntimeCommand($args->toArray());
        return new InvokeAgentRuntimeCommandResponse($result->toArray());
    }
}
