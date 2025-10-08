<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentActionGroups;

trait ListAgentActionGroupsTrait
{
    /**
     * @param ListAgentActionGroupsRequest $args
     * @return ListAgentActionGroupsResponse
     */
    public function listAgentActionGroups(ListAgentActionGroupsRequest $args)
    {
        $result = parent::listAgentActionGroups($args->toArray());
        return new ListAgentActionGroupsResponse($result->toArray());
    }
}
