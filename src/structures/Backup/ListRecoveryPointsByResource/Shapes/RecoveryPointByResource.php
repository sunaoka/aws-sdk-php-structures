<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecoveryPointArn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property 'COMPLETED'|'PARTIAL'|'DELETING'|'EXPIRED'|'AVAILABLE'|'STOPPED'|'CREATING'|null $Status
 * @property string|null $StatusMessage
 * @property string|null $EncryptionKeyArn
 * @property int|null $BackupSizeBytes
 * @property string|null $BackupVaultName
 * @property bool|null $IsParent
 * @property string|null $ParentRecoveryPointArn
 * @property string|null $ResourceName
 * @property 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT'|'RESTORE_ACCESS_BACKUP_VAULT'|null $VaultType
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|null $IndexStatus
 * @property string|null $IndexStatusMessage
 * @property 'AWS_OWNED_KMS_KEY'|'CUSTOMER_MANAGED_KMS_KEY'|null $EncryptionKeyType
 * @property AggregatedScanResult|null $AggregatedScanResult
 */
class RecoveryPointByResource extends Shape
{
    /**
     * @param array{
     *     RecoveryPointArn?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'COMPLETED'|'PARTIAL'|'DELETING'|'EXPIRED'|'AVAILABLE'|'STOPPED'|'CREATING'|null,
     *     StatusMessage?: string|null,
     *     EncryptionKeyArn?: string|null,
     *     BackupSizeBytes?: int|null,
     *     BackupVaultName?: string|null,
     *     IsParent?: bool|null,
     *     ParentRecoveryPointArn?: string|null,
     *     ResourceName?: string|null,
     *     VaultType?: 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT'|'RESTORE_ACCESS_BACKUP_VAULT'|null,
     *     IndexStatus?: 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|null,
     *     IndexStatusMessage?: string|null,
     *     EncryptionKeyType?: 'AWS_OWNED_KMS_KEY'|'CUSTOMER_MANAGED_KMS_KEY'|null,
     *     AggregatedScanResult?: AggregatedScanResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
