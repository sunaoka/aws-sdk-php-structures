<?php

namespace Sunaoka\Aws\Structures\Backup\ListProtectedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property string|null $ResourceType
 * @property \Aws\Api\DateTimeResult|null $LastBackupTime
 * @property string|null $ResourceName
 * @property string|null $LastBackupVaultArn
 * @property string|null $LastRecoveryPointArn
 */
class ProtectedResource extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     ResourceType?: string|null,
     *     LastBackupTime?: \Aws\Api\DateTimeResult|null,
     *     ResourceName?: string|null,
     *     LastBackupVaultArn?: string|null,
     *     LastRecoveryPointArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
