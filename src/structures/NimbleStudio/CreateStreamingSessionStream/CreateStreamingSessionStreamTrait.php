<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\CreateStreamingSessionStream;

trait CreateStreamingSessionStreamTrait
{
    /**
     * @param CreateStreamingSessionStreamRequest $args
     * @return CreateStreamingSessionStreamResponse
     */
    public function createStreamingSessionStream(CreateStreamingSessionStreamRequest $args)
    {
        $result = parent::createStreamingSessionStream($args->toArray());
        return new CreateStreamingSessionStreamResponse($result->toArray());
    }
}
