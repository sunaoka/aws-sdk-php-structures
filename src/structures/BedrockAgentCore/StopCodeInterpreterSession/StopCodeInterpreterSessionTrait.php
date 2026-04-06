<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StopCodeInterpreterSession;

trait StopCodeInterpreterSessionTrait
{
    /**
     * @param StopCodeInterpreterSessionRequest $args
     * @return StopCodeInterpreterSessionResponse
     */
    public function stopCodeInterpreterSession(StopCodeInterpreterSessionRequest $args)
    {
        $result = parent::stopCodeInterpreterSession($args->toArray());
        return new StopCodeInterpreterSessionResponse($result->toArray());
    }
}
