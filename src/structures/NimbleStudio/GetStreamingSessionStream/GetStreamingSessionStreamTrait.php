<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStreamingSessionStream;

trait GetStreamingSessionStreamTrait
{
    /**
     * @param GetStreamingSessionStreamRequest $args
     * @return GetStreamingSessionStreamResponse
     */
    public function getStreamingSessionStream(GetStreamingSessionStreamRequest $args)
    {
        $result = parent::getStreamingSessionStream($args->toArray());
        return new GetStreamingSessionStreamResponse($result->toArray());
    }
}
