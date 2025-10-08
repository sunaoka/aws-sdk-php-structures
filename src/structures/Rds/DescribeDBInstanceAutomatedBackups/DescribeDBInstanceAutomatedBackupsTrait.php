<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBInstanceAutomatedBackups;

trait DescribeDBInstanceAutomatedBackupsTrait
{
    /**
     * @param DescribeDBInstanceAutomatedBackupsRequest $args
     * @return DescribeDBInstanceAutomatedBackupsResponse
     */
    public function describeDBInstanceAutomatedBackups(DescribeDBInstanceAutomatedBackupsRequest $args)
    {
        $result = parent::describeDBInstanceAutomatedBackups($args->toArray());
        return new DescribeDBInstanceAutomatedBackupsResponse($result->toArray());
    }
}
