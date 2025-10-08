<?php

namespace Sunaoka\Aws\Structures\Omics\GetWorkflowVersion;

trait GetWorkflowVersionTrait
{
    /**
     * @param GetWorkflowVersionRequest $args
     * @return GetWorkflowVersionResponse
     */
    public function getWorkflowVersion(GetWorkflowVersionRequest $args)
    {
        $result = parent::getWorkflowVersion($args->toArray());
        return new GetWorkflowVersionResponse($result->toArray());
    }
}
