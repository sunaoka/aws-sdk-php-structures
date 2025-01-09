<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BatchSize
 * @property int $BatchWindow
 */
class EventBatchingCondition extends Shape
{
    /**
     * @param array{
     *     BatchSize: int,
     *     BatchWindow?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
