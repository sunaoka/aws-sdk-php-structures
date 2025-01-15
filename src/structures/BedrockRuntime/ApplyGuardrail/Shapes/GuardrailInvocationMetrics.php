<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $guardrailProcessingLatency
 * @property GuardrailUsage|null $usage
 * @property GuardrailCoverage|null $guardrailCoverage
 */
class GuardrailInvocationMetrics extends Shape
{
    /**
     * @param array{
     *     guardrailProcessingLatency?: int|null,
     *     usage?: GuardrailUsage|null,
     *     guardrailCoverage?: GuardrailCoverage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
