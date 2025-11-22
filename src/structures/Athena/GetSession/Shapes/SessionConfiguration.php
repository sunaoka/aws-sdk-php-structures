<?php

namespace Sunaoka\Aws\Structures\Athena\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExecutionRole
 * @property string|null $WorkingDirectory
 * @property int|null $IdleTimeoutSeconds
 * @property int<1, 480>|null $SessionIdleTimeoutInMinutes
 * @property EncryptionConfiguration|null $EncryptionConfiguration
 */
class SessionConfiguration extends Shape
{
    /**
     * @param array{
     *     ExecutionRole?: string|null,
     *     WorkingDirectory?: string|null,
     *     IdleTimeoutSeconds?: int|null,
     *     SessionIdleTimeoutInMinutes?: int<1, 480>|null,
     *     EncryptionConfiguration?: EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
