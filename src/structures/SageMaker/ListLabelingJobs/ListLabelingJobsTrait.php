<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobs;

trait ListLabelingJobsTrait
{
    /**
     * @param ListLabelingJobsRequest $args
     * @return ListLabelingJobsResponse
     */
    public function listLabelingJobs(ListLabelingJobsRequest $args)
    {
        $result = parent::listLabelingJobs($args->toArray());
        return new ListLabelingJobsResponse($result->toArray());
    }
}
