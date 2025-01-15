<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10>|null $Attempts
 */
class BatchRetryStrategy extends Shape
{
    /**
     * @param array{Attempts?: int<1, 10>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
