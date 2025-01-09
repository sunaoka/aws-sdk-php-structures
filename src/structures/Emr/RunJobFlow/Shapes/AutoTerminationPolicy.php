<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $IdleTimeout
 */
class AutoTerminationPolicy extends Shape
{
    /**
     * @param array{IdleTimeout?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
