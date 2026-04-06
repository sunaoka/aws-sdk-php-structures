<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\CreateStreamingSession;

trait CreateStreamingSessionTrait
{
    /**
     * @param CreateStreamingSessionRequest $args
     * @return CreateStreamingSessionResponse
     */
    public function createStreamingSession(CreateStreamingSessionRequest $args)
    {
        $result = parent::createStreamingSession($args->toArray());
        return new CreateStreamingSessionResponse($result->toArray());
    }
}
