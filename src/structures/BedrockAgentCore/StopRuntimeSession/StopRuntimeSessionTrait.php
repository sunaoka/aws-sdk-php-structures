<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StopRuntimeSession;

trait StopRuntimeSessionTrait
{
    /**
     * @param StopRuntimeSessionRequest $args
     * @return StopRuntimeSessionResponse
     */
    public function stopRuntimeSession(StopRuntimeSessionRequest $args)
    {
        $result = parent::stopRuntimeSession($args->toArray());
        return new StopRuntimeSessionResponse($result->toArray());
    }
}
