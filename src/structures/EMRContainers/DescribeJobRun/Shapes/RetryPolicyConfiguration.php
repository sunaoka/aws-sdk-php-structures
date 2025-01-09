<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxAttempts
 */
class RetryPolicyConfiguration extends Shape
{
    /**
     * @param array{maxAttempts: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
