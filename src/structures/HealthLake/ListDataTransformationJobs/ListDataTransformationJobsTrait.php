<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListDataTransformationJobs;

trait ListDataTransformationJobsTrait
{
    /**
     * @param ListDataTransformationJobsRequest $args
     * @return ListDataTransformationJobsResponse
     */
    public function listDataTransformationJobs(ListDataTransformationJobsRequest $args)
    {
        $result = parent::listDataTransformationJobs($args->toArray());
        return new ListDataTransformationJobsResponse($result->toArray());
    }
}
