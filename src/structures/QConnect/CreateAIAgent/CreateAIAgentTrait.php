<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgent;

trait CreateAIAgentTrait
{
    /**
     * @param CreateAIAgentRequest $args
     * @return CreateAIAgentResponse
     */
    public function createAIAgent(CreateAIAgentRequest $args)
    {
        $result = parent::createAIAgent($args->toArray());
        return new CreateAIAgentResponse($result->toArray());
    }
}
