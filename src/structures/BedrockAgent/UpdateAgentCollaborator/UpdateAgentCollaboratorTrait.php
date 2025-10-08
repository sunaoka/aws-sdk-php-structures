<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentCollaborator;

trait UpdateAgentCollaboratorTrait
{
    /**
     * @param UpdateAgentCollaboratorRequest $args
     * @return UpdateAgentCollaboratorResponse
     */
    public function updateAgentCollaborator(UpdateAgentCollaboratorRequest $args)
    {
        $result = parent::updateAgentCollaborator($args->toArray());
        return new UpdateAgentCollaboratorResponse($result->toArray());
    }
}
