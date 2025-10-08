<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactStreaming;

trait StartContactStreamingTrait
{
    /**
     * @param StartContactStreamingRequest $args
     * @return StartContactStreamingResponse
     */
    public function startContactStreaming(StartContactStreamingRequest $args)
    {
        $result = parent::startContactStreaming($args->toArray());
        return new StartContactStreamingResponse($result->toArray());
    }
}
