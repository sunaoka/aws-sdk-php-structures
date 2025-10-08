<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DisassociateAgentCollaborator;

trait DisassociateAgentCollaboratorTrait
{
    /**
     * @param DisassociateAgentCollaboratorRequest $args
     * @return DisassociateAgentCollaboratorResponse
     */
    public function disassociateAgentCollaborator(DisassociateAgentCollaboratorRequest $args)
    {
        $result = parent::disassociateAgentCollaborator($args->toArray());
        return new DisassociateAgentCollaboratorResponse($result->toArray());
    }
}
