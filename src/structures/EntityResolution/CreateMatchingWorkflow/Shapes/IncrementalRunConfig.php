<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IMMEDIATE'|null $incrementalRunType
 */
class IncrementalRunConfig extends Shape
{
    /**
     * @param array{incrementalRunType?: 'IMMEDIATE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
