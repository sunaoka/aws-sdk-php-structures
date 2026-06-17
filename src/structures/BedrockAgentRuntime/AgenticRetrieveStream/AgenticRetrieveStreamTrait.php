<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream;

trait AgenticRetrieveStreamTrait
{
    /**
     * @param AgenticRetrieveStreamRequest $args
     * @return AgenticRetrieveStreamResponse
     */
    public function agenticRetrieveStream(AgenticRetrieveStreamRequest $args)
    {
        $result = parent::agenticRetrieveStream($args->toArray());
        return new AgenticRetrieveStreamResponse($result->toArray());
    }
}
