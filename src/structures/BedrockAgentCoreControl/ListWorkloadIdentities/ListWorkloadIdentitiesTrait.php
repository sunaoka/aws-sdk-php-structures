<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListWorkloadIdentities;

trait ListWorkloadIdentitiesTrait
{
    /**
     * @param ListWorkloadIdentitiesRequest $args
     * @return ListWorkloadIdentitiesResponse
     */
    public function listWorkloadIdentities(ListWorkloadIdentitiesRequest $args)
    {
        $result = parent::listWorkloadIdentities($args->toArray());
        return new ListWorkloadIdentitiesResponse($result->toArray());
    }
}
