<?php

namespace Sunaoka\Aws\Structures\Athena\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExecutionRole
 * @property string|null $WorkingDirectory
 * @property int|null $IdleTimeoutSeconds
 * @property EncryptionConfiguration|null $EncryptionConfiguration
 */
class SessionConfiguration extends Shape
{
    /**
     * @param array{
     *     ExecutionRole?: string|null,
     *     WorkingDirectory?: string|null,
     *     IdleTimeoutSeconds?: int|null,
     *     EncryptionConfiguration?: EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
