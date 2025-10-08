<?php

namespace Sunaoka\Aws\Structures\Glue\StopWorkflowRun;

trait StopWorkflowRunTrait
{
    /**
     * @param StopWorkflowRunRequest $args
     * @return StopWorkflowRunResponse
     */
    public function stopWorkflowRun(StopWorkflowRunRequest $args)
    {
        $result = parent::stopWorkflowRun($args->toArray());
        return new StopWorkflowRunResponse($result->toArray());
    }
}
