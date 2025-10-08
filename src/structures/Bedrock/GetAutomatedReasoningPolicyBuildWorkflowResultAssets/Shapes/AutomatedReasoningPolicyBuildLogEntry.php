<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningPolicyAnnotation $annotation
 * @property 'APPLIED'|'FAILED' $status
 * @property list<AutomatedReasoningPolicyBuildStep> $buildSteps
 */
class AutomatedReasoningPolicyBuildLogEntry extends Shape
{
    /**
     * @param array{
     *     annotation: AutomatedReasoningPolicyAnnotation,
     *     status: 'APPLIED'|'FAILED',
     *     buildSteps: list<AutomatedReasoningPolicyBuildStep>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
