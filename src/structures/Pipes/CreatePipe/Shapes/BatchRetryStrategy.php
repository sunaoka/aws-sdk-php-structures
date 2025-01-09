<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Attempts
 */
class BatchRetryStrategy extends Shape
{
    /**
     * @param array{Attempts?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
