<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsSource|null $cloudWatchLogs
 * @property OnlineEvaluationConfigSource|null $onlineEvaluationConfigSource
 */
class DataSourceConfig extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogs?: CloudWatchLogsSource|null,
     *     onlineEvaluationConfigSource?: OnlineEvaluationConfigSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
