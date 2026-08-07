<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupAccessPointsByResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessPointArn
 * @property array<string, string> $AccessPointMetadata
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
class ListAccessPointsMember extends Shape
{
    /**
     * @param array{
     *     AccessPointArn: string,
     *     AccessPointMetadata: array<string, string>,
     *     BackupVaultArn?: string|null,
     *     BackupVaultName: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     Name: string,
     *     RecoveryPointArn: string,
     *     ResourceArn: string,
     *     ResourceType: string,
     *     Status: 'AVAILABLE'|'CREATING'|'DELETING'|'DISASSOCIATED'|'DISASSOCIATING'|'EXPIRED'|'FAILED',
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
