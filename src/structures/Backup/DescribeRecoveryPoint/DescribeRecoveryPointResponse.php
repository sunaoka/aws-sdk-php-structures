<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRecoveryPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RecoveryPointArn
 * @property string $BackupVaultName
 * @property string $BackupVaultArn
 * @property string $SourceBackupVaultArn
 * @property string $ResourceArn
 * @property string $ResourceType
 * @property Shapes\RecoveryPointCreator $CreatedBy
 * @property string $IamRoleArn
 * @property 'COMPLETED'|'PARTIAL'|'DELETING'|'EXPIRED' $Status
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $CompletionDate
 * @property int $BackupSizeInBytes
 * @property Shapes\CalculatedLifecycle $CalculatedLifecycle
 * @property Shapes\Lifecycle $Lifecycle
 * @property string $EncryptionKeyArn
 * @property bool $IsEncrypted
 * @property 'WARM'|'COLD'|'DELETED' $StorageClass
 * @property \Aws\Api\DateTimeResult $LastRestoreTime
 * @property string $ParentRecoveryPointArn
 * @property string $CompositeMemberIdentifier
 * @property bool $IsParent
 * @property string $ResourceName
 * @property 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT' $VaultType
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING' $IndexStatus
 * @property string $IndexStatusMessage
 */
class DescribeRecoveryPointResponse extends Response
{
}
