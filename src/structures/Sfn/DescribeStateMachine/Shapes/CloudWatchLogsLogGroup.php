<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupArn
 */
class CloudWatchLogsLogGroup extends Shape
{
    /**
     * @param array{logGroupArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
