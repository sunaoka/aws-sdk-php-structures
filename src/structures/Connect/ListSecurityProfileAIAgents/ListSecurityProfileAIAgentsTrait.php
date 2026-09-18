<?php

namespace Sunaoka\Aws\Structures\Connect\ListSecurityProfileAIAgents;

trait ListSecurityProfileAIAgentsTrait
{
    /**
     * @param ListSecurityProfileAIAgentsRequest $args
     * @return ListSecurityProfileAIAgentsResponse
     */
    public function listSecurityProfileAIAgents(ListSecurityProfileAIAgentsRequest $args)
    {
        $result = parent::listSecurityProfileAIAgents($args->toArray());
        return new ListSecurityProfileAIAgentsResponse($result->toArray());
    }
}
