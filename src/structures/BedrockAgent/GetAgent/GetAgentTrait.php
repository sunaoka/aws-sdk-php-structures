<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgent;

trait GetAgentTrait
{
    /**
     * @param GetAgentRequest $args
     * @return GetAgentResponse
     */
    public function getAgent(GetAgentRequest $args)
    {
        $result = parent::getAgent($args->toArray());
        return new GetAgentResponse($result->toArray());
    }
}
