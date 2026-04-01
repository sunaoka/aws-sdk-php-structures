<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetAgentSpaces;

trait BatchGetAgentSpacesTrait
{
    /**
     * @param BatchGetAgentSpacesRequest $args
     * @return BatchGetAgentSpacesResponse
     */
    public function batchGetAgentSpaces(BatchGetAgentSpacesRequest $args)
    {
        $result = parent::batchGetAgentSpaces($args->toArray());
        return new BatchGetAgentSpacesResponse($result->toArray());
    }
}
