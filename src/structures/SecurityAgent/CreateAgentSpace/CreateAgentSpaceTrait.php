<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateAgentSpace;

trait CreateAgentSpaceTrait
{
    /**
     * @param CreateAgentSpaceRequest $args
     * @return CreateAgentSpaceResponse
     */
    public function createAgentSpace(CreateAgentSpaceRequest $args)
    {
        $result = parent::createAgentSpace($args->toArray());
        return new CreateAgentSpaceResponse($result->toArray());
    }
}
