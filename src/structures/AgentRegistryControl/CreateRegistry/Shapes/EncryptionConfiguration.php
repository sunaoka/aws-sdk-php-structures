<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\CreateRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyArn
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{kmsKeyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
