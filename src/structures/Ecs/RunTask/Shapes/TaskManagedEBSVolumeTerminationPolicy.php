<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $deleteOnTermination
 */
class TaskManagedEBSVolumeTerminationPolicy extends Shape
{
    /**
     * @param array{deleteOnTermination: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
