<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\UpdateBrowserStream;

trait UpdateBrowserStreamTrait
{
    /**
     * @param UpdateBrowserStreamRequest $args
     * @return UpdateBrowserStreamResponse
     */
    public function updateBrowserStream(UpdateBrowserStreamRequest $args)
    {
        $result = parent::updateBrowserStream($args->toArray());
        return new UpdateBrowserStreamResponse($result->toArray());
    }
}
