<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIBenchmarkJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputLocation
 * @property list<AICloudWatchLogs>|null $CloudWatchLogs
 * @property AIMlflowConfig|null $MlflowConfig
 */
class AIBenchmarkOutputResult extends Shape
{
    /**
     * @param array{
     *     S3OutputLocation: string,
     *     CloudWatchLogs?: list<AICloudWatchLogs>|null,
     *     MlflowConfig?: AIMlflowConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
