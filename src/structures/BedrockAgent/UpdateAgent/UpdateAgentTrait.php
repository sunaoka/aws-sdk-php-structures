<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgent;

trait UpdateAgentTrait
{
    /**
     * @param UpdateAgentRequest $args
     * @return UpdateAgentResponse
     */
    public function updateAgent(UpdateAgentRequest $args)
    {
        $result = parent::updateAgent($args->toArray());
        return new UpdateAgentResponse($result->toArray());
    }
}
