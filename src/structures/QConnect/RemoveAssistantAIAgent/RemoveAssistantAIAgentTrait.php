<?php

namespace Sunaoka\Aws\Structures\QConnect\RemoveAssistantAIAgent;

trait RemoveAssistantAIAgentTrait
{
    /**
     * @param RemoveAssistantAIAgentRequest $args
     * @return RemoveAssistantAIAgentResponse
     */
    public function removeAssistantAIAgent(RemoveAssistantAIAgentRequest $args)
    {
        $result = parent::removeAssistantAIAgent($args->toArray());
        return new RemoveAssistantAIAgentResponse($result->toArray());
    }
}
