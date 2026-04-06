<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgents;

trait ListAIAgentsTrait
{
    /**
     * @param ListAIAgentsRequest $args
     * @return ListAIAgentsResponse
     */
    public function listAIAgents(ListAIAgentsRequest $args)
    {
        $result = parent::listAIAgents($args->toArray());
        return new ListAIAgentsResponse($result->toArray());
    }
}
