<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\GetWorkflow;

trait GetWorkflowTrait
{
    /**
     * @param GetWorkflowRequest $args
     * @return GetWorkflowResponse
     */
    public function getWorkflow(GetWorkflowRequest $args)
    {
        $result = parent::getWorkflow($args->toArray());
        return new GetWorkflowResponse($result->toArray());
    }
}
