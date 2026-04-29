<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $logGroupArns
 * @property list<string> $serviceNames
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property CloudWatchLogsRule|null $rule
 */
class CloudWatchLogsTraceConfig extends Shape
{
    /**
     * @param array{
     *     logGroupArns: list<string>,
     *     serviceNames: list<string>,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     rule?: CloudWatchLogsRule|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
