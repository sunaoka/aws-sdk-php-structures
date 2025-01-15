<?php

namespace Sunaoka\Aws\Structures\imagebuilder\StartResourceStateUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AVAILABLE'|'DELETED'|'DEPRECATED'|'DISABLED'|null $status
 */
class ResourceState extends Shape
{
    /**
     * @param array{status?: 'AVAILABLE'|'DELETED'|'DEPRECATED'|'DISABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
