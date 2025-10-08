<?php

namespace Sunaoka\Aws\Structures\DataSync\ListAgents;

trait ListAgentsTrait
{
    /**
     * @param ListAgentsRequest $args
     * @return ListAgentsResponse
     */
    public function listAgents(ListAgentsRequest $args)
    {
        $result = parent::listAgents($args->toArray());
        return new ListAgentsResponse($result->toArray());
    }
}
