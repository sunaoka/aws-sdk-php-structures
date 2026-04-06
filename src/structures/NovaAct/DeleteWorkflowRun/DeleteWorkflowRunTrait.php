<?php

namespace Sunaoka\Aws\Structures\NovaAct\DeleteWorkflowRun;

trait DeleteWorkflowRunTrait
{
    /**
     * @param DeleteWorkflowRunRequest $args
     * @return DeleteWorkflowRunResponse
     */
    public function deleteWorkflowRun(DeleteWorkflowRunRequest $args)
    {
        $result = parent::deleteWorkflowRun($args->toArray());
        return new DeleteWorkflowRunResponse($result->toArray());
    }
}
