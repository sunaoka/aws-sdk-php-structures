<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeBackup;

trait DescribeBackupTrait
{
    /**
     * @param DescribeBackupRequest $args
     * @return DescribeBackupResponse
     */
    public function describeBackup(DescribeBackupRequest $args)
    {
        $result = parent::describeBackup($args->toArray());
        return new DescribeBackupResponse($result->toArray());
    }
}
