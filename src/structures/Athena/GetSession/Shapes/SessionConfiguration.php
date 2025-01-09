<?php

namespace Sunaoka\Aws\Structures\Athena\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExecutionRole
 * @property string $WorkingDirectory
 * @property int $IdleTimeoutSeconds
 * @property EncryptionConfiguration $EncryptionConfiguration
 */
class SessionConfiguration extends Shape
{
    /**
     * @param array{
     *     ExecutionRole?: string,
     *     WorkingDirectory?: string,
     *     IdleTimeoutSeconds?: int,
     *     EncryptionConfiguration?: EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
