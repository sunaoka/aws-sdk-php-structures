<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRunProperties;

trait GetWorkflowRunPropertiesTrait
{
    /**
     * @param GetWorkflowRunPropertiesRequest $args
     * @return GetWorkflowRunPropertiesResponse
     */
    public function getWorkflowRunProperties(GetWorkflowRunPropertiesRequest $args)
    {
        $result = parent::getWorkflowRunProperties($args->toArray());
        return new GetWorkflowRunPropertiesResponse($result->toArray());
    }
}
