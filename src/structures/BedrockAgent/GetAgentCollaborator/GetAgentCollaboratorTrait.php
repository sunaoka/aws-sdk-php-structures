<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentCollaborator;

trait GetAgentCollaboratorTrait
{
    /**
     * @param GetAgentCollaboratorRequest $args
     * @return GetAgentCollaboratorResponse
     */
    public function getAgentCollaborator(GetAgentCollaboratorRequest $args)
    {
        $result = parent::getAgentCollaborator($args->toArray());
        return new GetAgentCollaboratorResponse($result->toArray());
    }
}
