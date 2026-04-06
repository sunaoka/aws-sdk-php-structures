<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIAgent;

trait UpdateAIAgentTrait
{
    /**
     * @param UpdateAIAgentRequest $args
     * @return UpdateAIAgentResponse
     */
    public function updateAIAgent(UpdateAIAgentRequest $args)
    {
        $result = parent::updateAIAgent($args->toArray());
        return new UpdateAIAgentResponse($result->toArray());
    }
}
