<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StopBrowserSession;

trait StopBrowserSessionTrait
{
    /**
     * @param StopBrowserSessionRequest $args
     * @return StopBrowserSessionResponse
     */
    public function stopBrowserSession(StopBrowserSessionRequest $args)
    {
        $result = parent::stopBrowserSession($args->toArray());
        return new StopBrowserSessionResponse($result->toArray());
    }
}
