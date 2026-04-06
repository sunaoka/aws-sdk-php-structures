<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeServiceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceResourceId|null $serviceResourceId
 */
class LatestServiceJobAttempt extends Shape
{
    /**
     * @param array{serviceResourceId?: ServiceResourceId|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
