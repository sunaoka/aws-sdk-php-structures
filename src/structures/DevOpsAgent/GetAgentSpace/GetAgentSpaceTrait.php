<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAgentSpace;

trait GetAgentSpaceTrait
{
    /**
     * @param GetAgentSpaceRequest $args
     * @return GetAgentSpaceResponse
     */
    public function getAgentSpace(GetAgentSpaceRequest $args)
    {
        $result = parent::getAgentSpace($args->toArray());
        return new GetAgentSpaceResponse($result->toArray());
    }
}
