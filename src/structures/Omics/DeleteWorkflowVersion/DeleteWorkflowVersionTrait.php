<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteWorkflowVersion;

trait DeleteWorkflowVersionTrait
{
    /**
     * @param DeleteWorkflowVersionRequest $args
     * @return void
     */
    public function deleteWorkflowVersion(DeleteWorkflowVersionRequest $args)
    {
        parent::deleteWorkflowVersion($args->toArray());
    }
}
