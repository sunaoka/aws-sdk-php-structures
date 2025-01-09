<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $currentAttemptCount
 */
class RetryPolicyExecution extends Shape
{
    /**
     * @param array{currentAttemptCount: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
