<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream;

trait RetrieveAndGenerateStreamTrait
{
    /**
     * @param RetrieveAndGenerateStreamRequest $args
     * @return RetrieveAndGenerateStreamResponse
     */
    public function retrieveAndGenerateStream(RetrieveAndGenerateStreamRequest $args)
    {
        $result = parent::retrieveAndGenerateStream($args->toArray());
        return new RetrieveAndGenerateStreamResponse($result->toArray());
    }
}
