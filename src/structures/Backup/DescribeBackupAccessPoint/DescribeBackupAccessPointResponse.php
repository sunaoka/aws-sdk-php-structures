<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeBackupAccessPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AccessPointArn
 * @property array<string, string>|null $AccessPointMetadata
 * @property string|null $BackupVaultArn
 * @property string $BackupVaultName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Name
 * @property string $RecoveryPointArn
 * @property string $ResourceArn
 * @property string $ResourceType
 * @property 'AVAILABLE'|'CREATING'|'DELETING'|'DISASSOCIATED'|'DISASSOCIATING'|'EXPIRED'|'FAILED' $Status
 * @property string|null $StatusMessage
 */
class DescribeBackupAccessPointResponse extends Response
{
}
