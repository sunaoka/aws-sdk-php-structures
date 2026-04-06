<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateAgentSpace;

trait UpdateAgentSpaceTrait
{
    /**
     * @param UpdateAgentSpaceRequest $args
     * @return UpdateAgentSpaceResponse
     */
    public function updateAgentSpace(UpdateAgentSpaceRequest $args)
    {
        $result = parent::updateAgentSpace($args->toArray());
        return new UpdateAgentSpaceResponse($result->toArray());
    }
}
