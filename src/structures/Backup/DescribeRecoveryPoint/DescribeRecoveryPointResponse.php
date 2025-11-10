<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRecoveryPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RecoveryPointArn
 * @property string|null $BackupVaultName
 * @property string|null $BackupVaultArn
 * @property string|null $SourceBackupVaultArn
 * @property string|null $ResourceArn
 * @property string|null $ResourceType
 * @property Shapes\RecoveryPointCreator|null $CreatedBy
 * @property string|null $IamRoleArn
 * @property 'COMPLETED'|'PARTIAL'|'DELETING'|'EXPIRED'|'AVAILABLE'|'STOPPED'|'CREATING'|null $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $InitiationDate
 * @property \Aws\Api\DateTimeResult|null $CompletionDate
 * @property int|null $BackupSizeInBytes
 * @property Shapes\CalculatedLifecycle|null $CalculatedLifecycle
 * @property Shapes\Lifecycle|null $Lifecycle
 * @property string|null $EncryptionKeyArn
 * @property bool|null $IsEncrypted
 * @property 'WARM'|'COLD'|'DELETED'|null $StorageClass
 * @property \Aws\Api\DateTimeResult|null $LastRestoreTime
 * @property string|null $ParentRecoveryPointArn
 * @property string|null $CompositeMemberIdentifier
 * @property bool|null $IsParent
 * @property string|null $ResourceName
 * @property 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT'|'RESTORE_ACCESS_BACKUP_VAULT'|null $VaultType
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|null $IndexStatus
 * @property string|null $IndexStatusMessage
 * @property 'AWS_OWNED_KMS_KEY'|'CUSTOMER_MANAGED_KMS_KEY'|null $EncryptionKeyType
 */
class DescribeRecoveryPointResponse extends Response
{
}
