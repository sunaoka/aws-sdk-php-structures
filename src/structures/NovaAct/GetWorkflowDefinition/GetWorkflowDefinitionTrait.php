<?php

namespace Sunaoka\Aws\Structures\NovaAct\GetWorkflowDefinition;

trait GetWorkflowDefinitionTrait
{
    /**
     * @param GetWorkflowDefinitionRequest $args
     * @return GetWorkflowDefinitionResponse
     */
    public function getWorkflowDefinition(GetWorkflowDefinitionRequest $args)
    {
        $result = parent::getWorkflowDefinition($args->toArray());
        return new GetWorkflowDefinitionResponse($result->toArray());
    }
}
