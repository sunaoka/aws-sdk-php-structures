<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomOrchestrationTrace $customOrchestrationTrace
 * @property FailureTrace $failureTrace
 * @property GuardrailTrace $guardrailTrace
 * @property OrchestrationTrace $orchestrationTrace
 * @property PostProcessingTrace $postProcessingTrace
 * @property PreProcessingTrace $preProcessingTrace
 * @property RoutingClassifierTrace $routingClassifierTrace
 */
class Trace extends Shape
{
    /**
     * @param array{
     *     customOrchestrationTrace?: CustomOrchestrationTrace,
     *     failureTrace?: FailureTrace,
     *     guardrailTrace?: GuardrailTrace,
     *     orchestrationTrace?: OrchestrationTrace,
     *     postProcessingTrace?: PostProcessingTrace,
     *     preProcessingTrace?: PreProcessingTrace,
     *     routingClassifierTrace?: RoutingClassifierTrace
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
