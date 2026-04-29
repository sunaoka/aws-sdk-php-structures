<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Span>|null $sessionSpans
 * @property CloudWatchLogsTraceConfig|null $cloudwatchLogs
 */
class AgentTracesConfig extends Shape
{
    /**
     * @param array{
     *     sessionSpans?: list<Span>|null,
     *     cloudwatchLogs?: CloudWatchLogsTraceConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
