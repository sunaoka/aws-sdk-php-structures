<?php

namespace Sunaoka\Aws\Structures\Backup\ListIndexedRecoveryPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecoveryPointArn
 * @property string $SourceResourceArn
 * @property string $IamRoleArn
 * @property \Aws\Api\DateTimeResult $BackupCreationDate
 * @property string $ResourceType
 * @property \Aws\Api\DateTimeResult $IndexCreationDate
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING' $IndexStatus
 * @property string $IndexStatusMessage
 * @property string $BackupVaultArn
 */
class IndexedRecoveryPoint extends Shape
{
    /**
     * @param array{
     *     RecoveryPointArn?: string,
     *     SourceResourceArn?: string,
     *     IamRoleArn?: string,
     *     BackupCreationDate?: \Aws\Api\DateTimeResult,
     *     ResourceType?: string,
     *     IndexCreationDate?: \Aws\Api\DateTimeResult,
     *     IndexStatus?: 'PENDING'|'ACTIVE'|'FAILED'|'DELETING',
     *     IndexStatusMessage?: string,
     *     BackupVaultArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
