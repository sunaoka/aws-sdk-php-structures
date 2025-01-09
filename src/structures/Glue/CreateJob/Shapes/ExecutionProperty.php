<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxConcurrentRuns
 */
class ExecutionProperty extends Shape
{
    /**
     * @param array{MaxConcurrentRuns?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
