<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $included
 */
class CloudWatchEventsExecutionDataDetails extends Shape
{
    /**
     * @param array{included?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
