<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDataDeletionJob;

trait DescribeDataDeletionJobTrait
{
    /**
     * @param DescribeDataDeletionJobRequest $args
     * @return DescribeDataDeletionJobResponse
     */
    public function describeDataDeletionJob(DescribeDataDeletionJobRequest $args)
    {
        $result = parent::describeDataDeletionJob($args->toArray());
        return new DescribeDataDeletionJobResponse($result->toArray());
    }
}
