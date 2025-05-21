<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2>|null $MaxRetries
 */
class RetryConfigOutput extends Shape
{
    /**
     * @param array{MaxRetries?: int<0, 2>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
