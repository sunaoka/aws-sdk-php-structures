<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Span>|null $sessionSpans
 * @property CloudWatchLogsTraceConfig|null $cloudwatchLogs
 * @property BatchEvaluationTraceConfig|null $batchEvaluation
 */
class AgentTracesConfig extends Shape
{
    /**
     * @param array{
     *     sessionSpans?: list<Span>|null,
     *     cloudwatchLogs?: CloudWatchLogsTraceConfig|null,
     *     batchEvaluation?: BatchEvaluationTraceConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
