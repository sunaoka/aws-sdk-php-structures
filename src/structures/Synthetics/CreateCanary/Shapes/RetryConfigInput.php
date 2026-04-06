<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2> $MaxRetries
 */
class RetryConfigInput extends Shape
{
    /**
     * @param array{MaxRetries: int<0, 2>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
