<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateWorkflowVersion;

trait UpdateWorkflowVersionTrait
{
    /**
     * @param UpdateWorkflowVersionRequest $args
     * @return void
     */
    public function updateWorkflowVersion(UpdateWorkflowVersionRequest $args)
    {
        parent::updateWorkflowVersion($args->toArray());
    }
}
