<?php

namespace Sunaoka\Aws\Structures\Connect\StopContactStreaming;

trait StopContactStreamingTrait
{
    /**
     * @param StopContactStreamingRequest $args
     * @return StopContactStreamingResponse
     */
    public function stopContactStreaming(StopContactStreamingRequest $args)
    {
        $result = parent::stopContactStreaming($args->toArray());
        return new StopContactStreamingResponse($result->toArray());
    }
}
