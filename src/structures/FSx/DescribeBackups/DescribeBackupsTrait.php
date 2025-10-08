<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeBackups;

trait DescribeBackupsTrait
{
    /**
     * @param DescribeBackupsRequest $args
     * @return DescribeBackupsResponse
     */
    public function describeBackups(DescribeBackupsRequest $args)
    {
        $result = parent::describeBackups($args->toArray());
        return new DescribeBackupsResponse($result->toArray());
    }
}
