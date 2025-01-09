<?php

namespace Sunaoka\Aws\Structures\Backup\ListProtectedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property string $ResourceType
 * @property \Aws\Api\DateTimeResult $LastBackupTime
 * @property string $ResourceName
 * @property string $LastBackupVaultArn
 * @property string $LastRecoveryPointArn
 */
class ProtectedResource extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string,
     *     ResourceType?: string,
     *     LastBackupTime?: \Aws\Api\DateTimeResult,
     *     ResourceName?: string,
     *     LastBackupVaultArn?: string,
     *     LastRecoveryPointArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
