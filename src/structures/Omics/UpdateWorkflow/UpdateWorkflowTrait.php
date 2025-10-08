<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateWorkflow;

trait UpdateWorkflowTrait
{
    /**
     * @param UpdateWorkflowRequest $args
     * @return void
     */
    public function updateWorkflow(UpdateWorkflowRequest $args)
    {
        parent::updateWorkflow($args->toArray());
    }
}
