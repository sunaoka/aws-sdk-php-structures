<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailTrace|null $guardrailTrace
 * @property PreProcessingTrace|null $preProcessingTrace
 * @property OrchestrationTrace|null $orchestrationTrace
 * @property PostProcessingTrace|null $postProcessingTrace
 * @property RoutingClassifierTrace|null $routingClassifierTrace
 * @property FailureTrace|null $failureTrace
 * @property CustomOrchestrationTrace|null $customOrchestrationTrace
 */
class Trace extends Shape
{
    /**
     * @param array{
     *     guardrailTrace?: GuardrailTrace|null,
     *     preProcessingTrace?: PreProcessingTrace|null,
     *     orchestrationTrace?: OrchestrationTrace|null,
     *     postProcessingTrace?: PostProcessingTrace|null,
     *     routingClassifierTrace?: RoutingClassifierTrace|null,
     *     failureTrace?: FailureTrace|null,
     *     customOrchestrationTrace?: CustomOrchestrationTrace|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
