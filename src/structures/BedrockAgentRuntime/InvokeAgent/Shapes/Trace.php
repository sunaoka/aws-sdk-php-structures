<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FailureTrace|null $failureTrace
 * @property GuardrailTrace|null $guardrailTrace
 * @property OrchestrationTrace|null $orchestrationTrace
 * @property PostProcessingTrace|null $postProcessingTrace
 * @property PreProcessingTrace|null $preProcessingTrace
 */
class Trace extends Shape
{
    /**
     * @param array{
     *     failureTrace?: FailureTrace|null,
     *     guardrailTrace?: GuardrailTrace|null,
     *     orchestrationTrace?: OrchestrationTrace|null,
     *     postProcessingTrace?: PostProcessingTrace|null,
     *     preProcessingTrace?: PreProcessingTrace|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
