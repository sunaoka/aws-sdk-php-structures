<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteWorkflow;

trait DeleteWorkflowTrait
{
    /**
     * @param DeleteWorkflowRequest $args
     * @return void
     */
    public function deleteWorkflow(DeleteWorkflowRequest $args)
    {
        parent::deleteWorkflow($args->toArray());
    }
}
