<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\DeleteStreamingSession;

trait DeleteStreamingSessionTrait
{
    /**
     * @param DeleteStreamingSessionRequest $args
     * @return DeleteStreamingSessionResponse
     */
    public function deleteStreamingSession(DeleteStreamingSessionRequest $args)
    {
        $result = parent::deleteStreamingSession($args->toArray());
        return new DeleteStreamingSessionResponse($result->toArray());
    }
}
