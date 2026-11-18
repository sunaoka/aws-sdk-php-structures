<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsSourceConfig|null $cloudWatchLogs
 * @property OnlineEvaluationSourceConfig|null $onlineEvaluation
 * @property BatchEvaluationSourceConfig|null $batchEvaluation
 */
class TraceSourceConfig extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogs?: CloudWatchLogsSourceConfig|null,
     *     onlineEvaluation?: OnlineEvaluationSourceConfig|null,
     *     batchEvaluation?: BatchEvaluationSourceConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
