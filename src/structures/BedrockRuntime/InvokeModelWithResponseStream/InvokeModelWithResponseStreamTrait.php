<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeModelWithResponseStream;

trait InvokeModelWithResponseStreamTrait
{
    /**
     * @param InvokeModelWithResponseStreamRequest $args
     * @return InvokeModelWithResponseStreamResponse
     */
    public function invokeModelWithResponseStream(InvokeModelWithResponseStreamRequest $args)
    {
        $result = parent::invokeModelWithResponseStream($args->toArray());
        return new InvokeModelWithResponseStreamResponse($result->toArray());
    }
}
