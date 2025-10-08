<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingWorkflow;

trait GetMatchingWorkflowTrait
{
    /**
     * @param GetMatchingWorkflowRequest $args
     * @return GetMatchingWorkflowResponse
     */
    public function getMatchingWorkflow(GetMatchingWorkflowRequest $args)
    {
        $result = parent::getMatchingWorkflow($args->toArray());
        return new GetMatchingWorkflowResponse($result->toArray());
    }
}
