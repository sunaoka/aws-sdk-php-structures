<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $included
 */
class CloudWatchEventsExecutionDataDetails extends Shape
{
    /**
     * @param array{included?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
