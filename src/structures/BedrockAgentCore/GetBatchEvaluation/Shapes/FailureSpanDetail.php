<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $spanId
 * @property string $traceId
 * @property list<InsightsFailureSignal> $signals
 */
class FailureSpanDetail extends Shape
{
    /**
     * @param array{
     *     spanId: string,
     *     traceId: string,
     *     signals: list<InsightsFailureSignal>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
