<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BatchSize
 * @property int $BatchWindow
 */
class StartingEventBatchCondition extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int,
     *     BatchWindow?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
