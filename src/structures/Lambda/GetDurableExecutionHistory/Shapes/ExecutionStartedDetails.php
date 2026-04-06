<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventInput $Input
 * @property int<0, max> $ExecutionTimeout
 */
class ExecutionStartedDetails extends Shape
{
    /**
     * @param array{
     *     Input: EventInput,
     *     ExecutionTimeout: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
