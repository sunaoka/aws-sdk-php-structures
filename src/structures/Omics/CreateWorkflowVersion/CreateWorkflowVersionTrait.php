<?php

namespace Sunaoka\Aws\Structures\Omics\CreateWorkflowVersion;

trait CreateWorkflowVersionTrait
{
    /**
     * @param CreateWorkflowVersionRequest $args
     * @return CreateWorkflowVersionResponse
     */
    public function createWorkflowVersion(CreateWorkflowVersionRequest $args)
    {
        $result = parent::createWorkflowVersion($args->toArray());
        return new CreateWorkflowVersionResponse($result->toArray());
    }
}
