<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NvidiaMpsAllocation|null $nvidiaMps
 */
class SharingStrategy extends Shape
{
    /**
     * @param array{nvidiaMps?: NvidiaMpsAllocation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
