<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetCodeInterpreterSession;

trait GetCodeInterpreterSessionTrait
{
    /**
     * @param GetCodeInterpreterSessionRequest $args
     * @return GetCodeInterpreterSessionResponse
     */
    public function getCodeInterpreterSession(GetCodeInterpreterSessionRequest $args)
    {
        $result = parent::getCodeInterpreterSession($args->toArray());
        return new GetCodeInterpreterSessionResponse($result->toArray());
    }
}
