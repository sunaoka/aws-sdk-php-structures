<?php

namespace Sunaoka\Aws\Structures\Backup\ListIndexedRecoveryPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecoveryPointArn
 * @property string|null $SourceResourceArn
 * @property string|null $IamRoleArn
 * @property \Aws\Api\DateTimeResult|null $BackupCreationDate
 * @property string|null $ResourceType
 * @property \Aws\Api\DateTimeResult|null $IndexCreationDate
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|null $IndexStatus
 * @property string|null $IndexStatusMessage
 * @property string|null $BackupVaultArn
 */
class IndexedRecoveryPoint extends Shape
{
    /**
     * @param array{
     *     RecoveryPointArn?: string|null,
     *     SourceResourceArn?: string|null,
     *     IamRoleArn?: string|null,
     *     BackupCreationDate?: \Aws\Api\DateTimeResult|null,
     *     ResourceType?: string|null,
     *     IndexCreationDate?: \Aws\Api\DateTimeResult|null,
     *     IndexStatus?: 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|null,
     *     IndexStatusMessage?: string|null,
     *     BackupVaultArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
