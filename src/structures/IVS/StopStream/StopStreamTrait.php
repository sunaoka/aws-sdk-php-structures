<?php

namespace Sunaoka\Aws\Structures\IVS\StopStream;

trait StopStreamTrait
{
    /**
     * @param StopStreamRequest $args
     * @return StopStreamResponse
     */
    public function stopStream(StopStreamRequest $args)
    {
        $result = parent::stopStream($args->toArray());
        return new StopStreamResponse($result->toArray());
    }
}
