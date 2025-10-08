<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartCodeInterpreterSession;

trait StartCodeInterpreterSessionTrait
{
    /**
     * @param StartCodeInterpreterSessionRequest $args
     * @return StartCodeInterpreterSessionResponse
     */
    public function startCodeInterpreterSession(StartCodeInterpreterSessionRequest $args)
    {
        $result = parent::startCodeInterpreterSession($args->toArray());
        return new StartCodeInterpreterSessionResponse($result->toArray());
    }
}
