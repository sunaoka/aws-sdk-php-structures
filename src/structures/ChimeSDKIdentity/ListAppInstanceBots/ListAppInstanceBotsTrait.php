<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstanceBots;

trait ListAppInstanceBotsTrait
{
    /**
     * @param ListAppInstanceBotsRequest $args
     * @return ListAppInstanceBotsResponse
     */
    public function listAppInstanceBots(ListAppInstanceBotsRequest $args)
    {
        $result = parent::listAppInstanceBots($args->toArray());
        return new ListAppInstanceBotsResponse($result->toArray());
    }
}
