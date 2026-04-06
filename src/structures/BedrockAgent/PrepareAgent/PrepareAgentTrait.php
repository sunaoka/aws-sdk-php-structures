<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\PrepareAgent;

trait PrepareAgentTrait
{
    /**
     * @param PrepareAgentRequest $args
     * @return PrepareAgentResponse
     */
    public function prepareAgent(PrepareAgentRequest $args)
    {
        $result = parent::prepareAgent($args->toArray());
        return new PrepareAgentResponse($result->toArray());
    }
}
