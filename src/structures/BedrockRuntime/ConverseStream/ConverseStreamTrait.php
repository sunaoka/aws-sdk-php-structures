<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream;

trait ConverseStreamTrait
{
    /**
     * @param ConverseStreamRequest $args
     * @return ConverseStreamResponse
     */
    public function converseStream(ConverseStreamRequest $args)
    {
        $result = parent::converseStream($args->toArray());
        return new ConverseStreamResponse($result->toArray());
    }
}
