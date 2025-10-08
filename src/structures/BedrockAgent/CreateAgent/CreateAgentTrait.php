<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgent;

trait CreateAgentTrait
{
    /**
     * @param CreateAgentRequest $args
     * @return CreateAgentResponse
     */
    public function createAgent(CreateAgentRequest $args)
    {
        $result = parent::createAgent($args->toArray());
        return new CreateAgentResponse($result->toArray());
    }
}
