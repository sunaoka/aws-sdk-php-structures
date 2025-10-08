<?php

namespace Sunaoka\Aws\Structures\Lambda\InvokeWithResponseStream;

trait InvokeWithResponseStreamTrait
{
    /**
     * @param InvokeWithResponseStreamRequest $args
     * @return InvokeWithResponseStreamResponse
     */
    public function invokeWithResponseStream(InvokeWithResponseStreamRequest $args)
    {
        $result = parent::invokeWithResponseStream($args->toArray());
        return new InvokeWithResponseStreamResponse($result->toArray());
    }
}
