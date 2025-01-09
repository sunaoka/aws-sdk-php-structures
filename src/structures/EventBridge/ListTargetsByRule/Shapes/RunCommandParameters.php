<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RunCommandTarget> $RunCommandTargets
 */
class RunCommandParameters extends Shape
{
    /**
     * @param array{RunCommandTargets: list<RunCommandTarget>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
