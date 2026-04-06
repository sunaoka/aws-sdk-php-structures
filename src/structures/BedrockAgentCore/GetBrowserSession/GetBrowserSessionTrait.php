<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBrowserSession;

trait GetBrowserSessionTrait
{
    /**
     * @param GetBrowserSessionRequest $args
     * @return GetBrowserSessionResponse
     */
    public function getBrowserSession(GetBrowserSessionRequest $args)
    {
        $result = parent::getBrowserSession($args->toArray());
        return new GetBrowserSessionResponse($result->toArray());
    }
}
