<?php

namespace Sunaoka\Aws\Structures\NovaAct\UpdateWorkflowRun;

trait UpdateWorkflowRunTrait
{
    /**
     * @param UpdateWorkflowRunRequest $args
     * @return UpdateWorkflowRunResponse
     */
    public function updateWorkflowRun(UpdateWorkflowRunRequest $args)
    {
        $result = parent::updateWorkflowRun($args->toArray());
        return new UpdateWorkflowRunResponse($result->toArray());
    }
}
