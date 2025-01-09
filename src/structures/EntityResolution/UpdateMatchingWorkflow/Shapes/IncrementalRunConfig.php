<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IMMEDIATE' $incrementalRunType
 */
class IncrementalRunConfig extends Shape
{
    /**
     * @param array{incrementalRunType?: 'IMMEDIATE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
