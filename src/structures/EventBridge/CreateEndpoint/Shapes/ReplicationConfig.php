<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $State
 */
class ReplicationConfig extends Shape
{
    /**
     * @param array{State?: 'ENABLED'|'DISABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
