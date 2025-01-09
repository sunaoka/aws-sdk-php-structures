<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByLegalHold\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecoveryPointArn
 * @property string $ResourceArn
 * @property string $ResourceType
 * @property string $BackupVaultName
 */
class RecoveryPointMember extends Shape
{
    /**
     * @param array{
     *     RecoveryPointArn?: string,
     *     ResourceArn?: string,
     *     ResourceType?: string,
     *     BackupVaultName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
