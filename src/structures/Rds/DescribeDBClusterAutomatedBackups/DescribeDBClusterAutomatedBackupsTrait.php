<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusterAutomatedBackups;

trait DescribeDBClusterAutomatedBackupsTrait
{
    /**
     * @param DescribeDBClusterAutomatedBackupsRequest $args
     * @return DescribeDBClusterAutomatedBackupsResponse
     */
    public function describeDBClusterAutomatedBackups(DescribeDBClusterAutomatedBackupsRequest $args)
    {
        $result = parent::describeDBClusterAutomatedBackups($args->toArray());
        return new DescribeDBClusterAutomatedBackupsResponse($result->toArray());
    }
}
