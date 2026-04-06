<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\EndSession;

trait EndSessionTrait
{
    /**
     * @param EndSessionRequest $args
     * @return EndSessionResponse
     */
    public function endSession(EndSessionRequest $args)
    {
        $result = parent::endSession($args->toArray());
        return new EndSessionResponse($result->toArray());
    }
}
