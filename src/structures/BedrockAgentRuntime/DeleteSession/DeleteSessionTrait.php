<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\DeleteSession;

trait DeleteSessionTrait
{
    /**
     * @param DeleteSessionRequest $args
     * @return DeleteSessionResponse
     */
    public function deleteSession(DeleteSessionRequest $args)
    {
        $result = parent::deleteSession($args->toArray());
        return new DeleteSessionResponse($result->toArray());
    }
}
