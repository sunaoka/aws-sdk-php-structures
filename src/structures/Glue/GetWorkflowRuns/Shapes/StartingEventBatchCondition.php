<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BatchSize
 * @property int|null $BatchWindow
 */
class StartingEventBatchCondition extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int|null,
     *     BatchWindow?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
