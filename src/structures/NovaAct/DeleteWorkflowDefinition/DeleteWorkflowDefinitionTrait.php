<?php

namespace Sunaoka\Aws\Structures\NovaAct\DeleteWorkflowDefinition;

trait DeleteWorkflowDefinitionTrait
{
    /**
     * @param DeleteWorkflowDefinitionRequest $args
     * @return DeleteWorkflowDefinitionResponse
     */
    public function deleteWorkflowDefinition(DeleteWorkflowDefinitionRequest $args)
    {
        $result = parent::deleteWorkflowDefinition($args->toArray());
        return new DeleteWorkflowDefinitionResponse($result->toArray());
    }
}
