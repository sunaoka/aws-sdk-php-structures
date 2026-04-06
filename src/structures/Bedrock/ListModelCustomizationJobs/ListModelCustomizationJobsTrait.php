<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelCustomizationJobs;

trait ListModelCustomizationJobsTrait
{
    /**
     * @param ListModelCustomizationJobsRequest $args
     * @return ListModelCustomizationJobsResponse
     */
    public function listModelCustomizationJobs(ListModelCustomizationJobsRequest $args)
    {
        $result = parent::listModelCustomizationJobs($args->toArray());
        return new ListModelCustomizationJobsResponse($result->toArray());
    }
}
