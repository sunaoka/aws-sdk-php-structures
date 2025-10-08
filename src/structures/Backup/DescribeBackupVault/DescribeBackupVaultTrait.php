<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeBackupVault;

trait DescribeBackupVaultTrait
{
    /**
     * @param DescribeBackupVaultRequest $args
     * @return DescribeBackupVaultResponse
     */
    public function describeBackupVault(DescribeBackupVaultRequest $args)
    {
        $result = parent::describeBackupVault($args->toArray());
        return new DescribeBackupVaultResponse($result->toArray());
    }
}
