<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\ListModelPackagingJobs;

trait ListModelPackagingJobsTrait
{
    /**
     * @param ListModelPackagingJobsRequest $args
     * @return ListModelPackagingJobsResponse
     */
    public function listModelPackagingJobs(ListModelPackagingJobsRequest $args)
    {
        $result = parent::listModelPackagingJobs($args->toArray());
        return new ListModelPackagingJobsResponse($result->toArray());
    }
}
