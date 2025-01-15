<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaxConcurrentRuns
 */
class ExecutionProperty extends Shape
{
    /**
     * @param array{MaxConcurrentRuns?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
