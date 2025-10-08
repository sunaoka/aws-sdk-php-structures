<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBrowserSession;

trait StartBrowserSessionTrait
{
    /**
     * @param StartBrowserSessionRequest $args
     * @return StartBrowserSessionResponse
     */
    public function startBrowserSession(StartBrowserSessionRequest $args)
    {
        $result = parent::startBrowserSession($args->toArray());
        return new StartBrowserSessionResponse($result->toArray());
    }
}
