<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByBackupVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string|null $BackupVaultAccountId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $ByResourceArn
 * @property string|null $ByResourceType
 * @property string|null $ByBackupPlanId
 * @property \Aws\Api\DateTimeResult|null $ByCreatedBefore
 * @property \Aws\Api\DateTimeResult|null $ByCreatedAfter
 * @property string|null $ByParentRecoveryPointArn
 */
class ListRecoveryPointsByBackupVaultRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     BackupVaultAccountId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     ByResourceArn?: string|null,
     *     ByResourceType?: string|null,
     *     ByBackupPlanId?: string|null,
     *     ByCreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     ByCreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     ByParentRecoveryPointArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
