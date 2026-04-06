<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\UpdateWorkflow;

trait UpdateWorkflowTrait
{
    /**
     * @param UpdateWorkflowRequest $args
     * @return UpdateWorkflowResponse
     */
    public function updateWorkflow(UpdateWorkflowRequest $args)
    {
        $result = parent::updateWorkflow($args->toArray());
        return new UpdateWorkflowResponse($result->toArray());
    }
}
