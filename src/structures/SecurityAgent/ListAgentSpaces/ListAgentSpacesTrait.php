<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListAgentSpaces;

trait ListAgentSpacesTrait
{
    /**
     * @param ListAgentSpacesRequest $args
     * @return ListAgentSpacesResponse
     */
    public function listAgentSpaces(ListAgentSpacesRequest $args)
    {
        $result = parent::listAgentSpaces($args->toArray());
        return new ListAgentSpacesResponse($result->toArray());
    }
}
