<?php

namespace Sunaoka\Aws\Structures\Glue\ResumeWorkflowRun;

trait ResumeWorkflowRunTrait
{
    /**
     * @param ResumeWorkflowRunRequest $args
     * @return ResumeWorkflowRunResponse
     */
    public function resumeWorkflowRun(ResumeWorkflowRunRequest $args)
    {
        $result = parent::resumeWorkflowRun($args->toArray());
        return new ResumeWorkflowRunResponse($result->toArray());
    }
}
