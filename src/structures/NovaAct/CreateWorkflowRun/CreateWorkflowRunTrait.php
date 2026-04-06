<?php

namespace Sunaoka\Aws\Structures\NovaAct\CreateWorkflowRun;

trait CreateWorkflowRunTrait
{
    /**
     * @param CreateWorkflowRunRequest $args
     * @return CreateWorkflowRunResponse
     */
    public function createWorkflowRun(CreateWorkflowRunRequest $args)
    {
        $result = parent::createWorkflowRun($args->toArray());
        return new CreateWorkflowRunResponse($result->toArray());
    }
}
