<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\StopStreamingSession;

trait StopStreamingSessionTrait
{
    /**
     * @param StopStreamingSessionRequest $args
     * @return StopStreamingSessionResponse
     */
    public function stopStreamingSession(StopStreamingSessionRequest $args)
    {
        $result = parent::stopStreamingSession($args->toArray());
        return new StopStreamingSessionResponse($result->toArray());
    }
}
