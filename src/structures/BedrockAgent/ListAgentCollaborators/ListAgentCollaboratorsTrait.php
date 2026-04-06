<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentCollaborators;

trait ListAgentCollaboratorsTrait
{
    /**
     * @param ListAgentCollaboratorsRequest $args
     * @return ListAgentCollaboratorsResponse
     */
    public function listAgentCollaborators(ListAgentCollaboratorsRequest $args)
    {
        $result = parent::listAgentCollaborators($args->toArray());
        return new ListAgentCollaboratorsResponse($result->toArray());
    }
}
