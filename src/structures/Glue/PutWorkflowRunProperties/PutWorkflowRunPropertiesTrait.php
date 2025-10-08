<?php

namespace Sunaoka\Aws\Structures\Glue\PutWorkflowRunProperties;

trait PutWorkflowRunPropertiesTrait
{
    /**
     * @param PutWorkflowRunPropertiesRequest $args
     * @return PutWorkflowRunPropertiesResponse
     */
    public function putWorkflowRunProperties(PutWorkflowRunPropertiesRequest $args)
    {
        $result = parent::putWorkflowRunProperties($args->toArray());
        return new PutWorkflowRunPropertiesResponse($result->toArray());
    }
}
