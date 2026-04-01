<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\DeleteAgentSpace;

trait DeleteAgentSpaceTrait
{
    /**
     * @param DeleteAgentSpaceRequest $args
     * @return DeleteAgentSpaceResponse
     */
    public function deleteAgentSpace(DeleteAgentSpaceRequest $args)
    {
        $result = parent::deleteAgentSpace($args->toArray());
        return new DeleteAgentSpaceResponse($result->toArray());
    }
}
