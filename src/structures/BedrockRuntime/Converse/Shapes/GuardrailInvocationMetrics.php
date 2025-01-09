<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $guardrailProcessingLatency
 * @property GuardrailUsage $usage
 * @property GuardrailCoverage $guardrailCoverage
 */
class GuardrailInvocationMetrics extends Shape
{
    /**
     * @param array{
     *     guardrailProcessingLatency?: int,
     *     usage?: GuardrailUsage,
     *     guardrailCoverage?: GuardrailCoverage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
