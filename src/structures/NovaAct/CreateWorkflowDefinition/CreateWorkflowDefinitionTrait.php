<?php

namespace Sunaoka\Aws\Structures\NovaAct\CreateWorkflowDefinition;

trait CreateWorkflowDefinitionTrait
{
    /**
     * @param CreateWorkflowDefinitionRequest $args
     * @return CreateWorkflowDefinitionResponse
     */
    public function createWorkflowDefinition(CreateWorkflowDefinitionRequest $args)
    {
        $result = parent::createWorkflowDefinition($args->toArray());
        return new CreateWorkflowDefinitionResponse($result->toArray());
    }
}
