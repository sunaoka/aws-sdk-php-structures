<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModelPackagingJob;

trait DescribeModelPackagingJobTrait
{
    /**
     * @param DescribeModelPackagingJobRequest $args
     * @return DescribeModelPackagingJobResponse
     */
    public function describeModelPackagingJob(DescribeModelPackagingJobRequest $args)
    {
        $result = parent::describeModelPackagingJob($args->toArray());
        return new DescribeModelPackagingJobResponse($result->toArray());
    }
}
