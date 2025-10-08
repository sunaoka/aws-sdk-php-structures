<?php

namespace Sunaoka\Aws\Structures\Connect\ListAgentStatuses;

trait ListAgentStatusesTrait
{
    /**
     * @param ListAgentStatusesRequest $args
     * @return ListAgentStatusesResponse
     */
    public function listAgentStatuses(ListAgentStatusesRequest $args)
    {
        $result = parent::listAgentStatuses($args->toArray());
        return new ListAgentStatusesResponse($result->toArray());
    }
}
