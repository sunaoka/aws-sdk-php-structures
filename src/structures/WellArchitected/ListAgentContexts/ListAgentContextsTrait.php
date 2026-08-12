<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentContexts;

trait ListAgentContextsTrait
{
    /**
     * @param ListAgentContextsRequest $args
     * @return ListAgentContextsResponse
     */
    public function listAgentContexts(ListAgentContextsRequest $args)
    {
        $result = parent::listAgentContexts($args->toArray());
        return new ListAgentContextsResponse($result->toArray());
    }
}
