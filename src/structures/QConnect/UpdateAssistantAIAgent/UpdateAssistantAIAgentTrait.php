<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAssistantAIAgent;

trait UpdateAssistantAIAgentTrait
{
    /**
     * @param UpdateAssistantAIAgentRequest $args
     * @return UpdateAssistantAIAgentResponse
     */
    public function updateAssistantAIAgent(UpdateAssistantAIAgentRequest $args)
    {
        $result = parent::updateAssistantAIAgent($args->toArray());
        return new UpdateAssistantAIAgentResponse($result->toArray());
    }
}
