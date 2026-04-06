<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\StartStreamingSession;

trait StartStreamingSessionTrait
{
    /**
     * @param StartStreamingSessionRequest $args
     * @return StartStreamingSessionResponse
     */
    public function startStreamingSession(StartStreamingSessionRequest $args)
    {
        $result = parent::startStreamingSession($args->toArray());
        return new StartStreamingSessionResponse($result->toArray());
    }
}
