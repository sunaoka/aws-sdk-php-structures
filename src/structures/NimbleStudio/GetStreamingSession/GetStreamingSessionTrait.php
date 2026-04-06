<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStreamingSession;

trait GetStreamingSessionTrait
{
    /**
     * @param GetStreamingSessionRequest $args
     * @return GetStreamingSessionResponse
     */
    public function getStreamingSession(GetStreamingSessionRequest $args)
    {
        $result = parent::getStreamingSession($args->toArray());
        return new GetStreamingSessionResponse($result->toArray());
    }
}
