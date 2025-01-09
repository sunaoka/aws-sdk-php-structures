<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10> $Attempts
 */
class BatchRetryStrategy extends Shape
{
    /**
     * @param array{Attempts?: int<1, 10>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
