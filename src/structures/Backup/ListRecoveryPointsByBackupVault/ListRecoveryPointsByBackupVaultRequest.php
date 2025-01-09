<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByBackupVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string $BackupVaultAccountId
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property string $ByResourceArn
 * @property string $ByResourceType
 * @property string $ByBackupPlanId
 * @property \Aws\Api\DateTimeResult $ByCreatedBefore
 * @property \Aws\Api\DateTimeResult $ByCreatedAfter
 * @property string $ByParentRecoveryPointArn
 */
class ListRecoveryPointsByBackupVaultRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     BackupVaultAccountId?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     ByResourceArn?: string,
     *     ByResourceType?: string,
     *     ByBackupPlanId?: string,
     *     ByCreatedBefore?: \Aws\Api\DateTimeResult,
     *     ByCreatedAfter?: \Aws\Api\DateTimeResult,
     *     ByParentRecoveryPointArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
