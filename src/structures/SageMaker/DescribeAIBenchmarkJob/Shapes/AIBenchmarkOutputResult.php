<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIBenchmarkJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputLocation
 * @property list<AICloudWatchLogs>|null $CloudWatchLogs
 */
class AIBenchmarkOutputResult extends Shape
{
    /**
     * @param array{
     *     S3OutputLocation: string,
     *     CloudWatchLogs?: list<AICloudWatchLogs>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
