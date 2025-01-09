<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachineForExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 */
class TracingConfiguration extends Shape
{
    /**
     * @param array{enabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
