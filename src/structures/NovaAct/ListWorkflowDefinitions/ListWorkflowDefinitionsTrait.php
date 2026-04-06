<?php

namespace Sunaoka\Aws\Structures\NovaAct\ListWorkflowDefinitions;

trait ListWorkflowDefinitionsTrait
{
    /**
     * @param ListWorkflowDefinitionsRequest $args
     * @return ListWorkflowDefinitionsResponse
     */
    public function listWorkflowDefinitions(ListWorkflowDefinitionsRequest $args)
    {
        $result = parent::listWorkflowDefinitions($args->toArray());
        return new ListWorkflowDefinitionsResponse($result->toArray());
    }
}
