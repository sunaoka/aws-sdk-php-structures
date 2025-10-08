<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeBackupJob;

trait DescribeBackupJobTrait
{
    /**
     * @param DescribeBackupJobRequest $args
     * @return DescribeBackupJobResponse
     */
    public function describeBackupJob(DescribeBackupJobRequest $args)
    {
        $result = parent::describeBackupJob($args->toArray());
        return new DescribeBackupJobResponse($result->toArray());
    }
}
