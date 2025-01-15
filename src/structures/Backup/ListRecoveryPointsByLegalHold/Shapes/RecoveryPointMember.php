<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByLegalHold\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecoveryPointArn
 * @property string|null $ResourceArn
 * @property string|null $ResourceType
 * @property string|null $BackupVaultName
 */
class RecoveryPointMember extends Shape
{
    /**
     * @param array{
     *     RecoveryPointArn?: string|null,
     *     ResourceArn?: string|null,
     *     ResourceType?: string|null,
     *     BackupVaultName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
