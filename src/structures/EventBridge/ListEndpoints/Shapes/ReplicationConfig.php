<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $State
 */
class ReplicationConfig extends Shape
{
    /**
     * @param array{State?: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
