<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\AssociateAgentCollaborator;

trait AssociateAgentCollaboratorTrait
{
    /**
     * @param AssociateAgentCollaboratorRequest $args
     * @return AssociateAgentCollaboratorResponse
     */
    public function associateAgentCollaborator(AssociateAgentCollaboratorRequest $args)
    {
        $result = parent::associateAgentCollaborator($args->toArray());
        return new AssociateAgentCollaboratorResponse($result->toArray());
    }
}
