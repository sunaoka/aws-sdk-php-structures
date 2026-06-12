<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property string $explanation
 * @property string $fixType
 * @property string $recommendation
 * @property list<FailureSpanDetail> $failureSpans
 */
class AffectedSession extends Shape
{
    /**
     * @param array{
     *     sessionId: string,
     *     explanation: string,
     *     fixType: string,
     *     recommendation: string,
     *     failureSpans: list<FailureSpanDetail>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
