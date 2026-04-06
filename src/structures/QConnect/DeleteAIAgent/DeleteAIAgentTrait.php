<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAIAgent;

trait DeleteAIAgentTrait
{
    /**
     * @param DeleteAIAgentRequest $args
     * @return DeleteAIAgentResponse
     */
    public function deleteAIAgent(DeleteAIAgentRequest $args)
    {
        $result = parent::deleteAIAgent($args->toArray());
        return new DeleteAIAgentResponse($result->toArray());
    }
}
