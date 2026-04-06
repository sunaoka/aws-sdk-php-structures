<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIAgent;

trait GetAIAgentTrait
{
    /**
     * @param GetAIAgentRequest $args
     * @return GetAIAgentResponse
     */
    public function getAIAgent(GetAIAgentRequest $args)
    {
        $result = parent::getAIAgent($args->toArray());
        return new GetAIAgentResponse($result->toArray());
    }
}
