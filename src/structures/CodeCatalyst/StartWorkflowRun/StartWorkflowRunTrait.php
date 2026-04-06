<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\StartWorkflowRun;

trait StartWorkflowRunTrait
{
    /**
     * @param StartWorkflowRunRequest $args
     * @return StartWorkflowRunResponse
     */
    public function startWorkflowRun(StartWorkflowRunRequest $args)
    {
        $result = parent::startWorkflowRun($args->toArray());
        return new StartWorkflowRunResponse($result->toArray());
    }
}
