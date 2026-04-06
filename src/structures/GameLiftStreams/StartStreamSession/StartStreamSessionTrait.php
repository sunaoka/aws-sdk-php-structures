<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\StartStreamSession;

trait StartStreamSessionTrait
{
    /**
     * @param StartStreamSessionRequest $args
     * @return StartStreamSessionResponse
     */
    public function startStreamSession(StartStreamSessionRequest $args)
    {
        $result = parent::startStreamSession($args->toArray());
        return new StartStreamSessionResponse($result->toArray());
    }
}
