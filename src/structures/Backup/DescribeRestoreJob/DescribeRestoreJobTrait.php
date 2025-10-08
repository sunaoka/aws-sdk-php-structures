<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRestoreJob;

trait DescribeRestoreJobTrait
{
    /**
     * @param DescribeRestoreJobRequest $args
     * @return DescribeRestoreJobResponse
     */
    public function describeRestoreJob(DescribeRestoreJobRequest $args)
    {
        $result = parent::describeRestoreJob($args->toArray());
        return new DescribeRestoreJobResponse($result->toArray());
    }
}
