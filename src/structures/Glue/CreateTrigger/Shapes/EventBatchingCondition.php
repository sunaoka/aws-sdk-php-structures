<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100> $BatchSize
 * @property int<1, 900> $BatchWindow
 */
class EventBatchingCondition extends Shape
{
    /**
     * @param array{
     *     BatchSize: int<1, 100>,
     *     BatchWindow?: int<1, 900>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
