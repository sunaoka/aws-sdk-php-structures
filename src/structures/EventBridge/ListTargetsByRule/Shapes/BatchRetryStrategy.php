<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Attempts
 */
class BatchRetryStrategy extends Shape
{
    /**
     * @param array{Attempts?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
