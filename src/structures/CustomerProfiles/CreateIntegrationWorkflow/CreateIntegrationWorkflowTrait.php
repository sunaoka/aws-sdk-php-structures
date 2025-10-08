<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateIntegrationWorkflow;

trait CreateIntegrationWorkflowTrait
{
    /**
     * @param CreateIntegrationWorkflowRequest $args
     * @return CreateIntegrationWorkflowResponse
     */
    public function createIntegrationWorkflow(CreateIntegrationWorkflowRequest $args)
    {
        $result = parent::createIntegrationWorkflow($args->toArray());
        return new CreateIntegrationWorkflowResponse($result->toArray());
    }
}
