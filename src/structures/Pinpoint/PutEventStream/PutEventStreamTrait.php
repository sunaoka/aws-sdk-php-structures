<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEventStream;

trait PutEventStreamTrait
{
    /**
     * @param PutEventStreamRequest $args
     * @return PutEventStreamResponse
     */
    public function putEventStream(PutEventStreamRequest $args)
    {
        $result = parent::putEventStream($args->toArray());
        return new PutEventStreamResponse($result->toArray());
    }
}
