<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomOrchestrationTrace|null $customOrchestrationTrace
 * @property FailureTrace|null $failureTrace
 * @property GuardrailTrace|null $guardrailTrace
 * @property OrchestrationTrace|null $orchestrationTrace
 * @property PostProcessingTrace|null $postProcessingTrace
 * @property PreProcessingTrace|null $preProcessingTrace
 * @property RoutingClassifierTrace|null $routingClassifierTrace
 */
class Trace extends Shape
{
    /**
     * @param array{
     *     customOrchestrationTrace?: CustomOrchestrationTrace|null,
     *     failureTrace?: FailureTrace|null,
     *     guardrailTrace?: GuardrailTrace|null,
     *     orchestrationTrace?: OrchestrationTrace|null,
     *     postProcessingTrace?: PostProcessingTrace|null,
     *     preProcessingTrace?: PreProcessingTrace|null,
     *     routingClassifierTrace?: RoutingClassifierTrace|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
