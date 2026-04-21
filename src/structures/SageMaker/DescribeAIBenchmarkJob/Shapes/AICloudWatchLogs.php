<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIBenchmarkJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogGroupArn
 * @property string|null $LogStreamName
 */
class AICloudWatchLogs extends Shape
{
    /**
     * @param array{
     *     LogGroupArn?: string|null,
     *     LogStreamName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
