<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\DeleteWorkflow;

trait DeleteWorkflowTrait
{
    /**
     * @param DeleteWorkflowRequest $args
     * @return DeleteWorkflowResponse
     */
    public function deleteWorkflow(DeleteWorkflowRequest $args)
    {
        $result = parent::deleteWorkflow($args->toArray());
        return new DeleteWorkflowResponse($result->toArray());
    }
}
