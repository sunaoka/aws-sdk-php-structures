<?php

namespace Sunaoka\Aws\Structures\Lambda\CheckpointDurableExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ReplayChildren
 */
class ContextOptions extends Shape
{
    /**
     * @param array{ReplayChildren?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
