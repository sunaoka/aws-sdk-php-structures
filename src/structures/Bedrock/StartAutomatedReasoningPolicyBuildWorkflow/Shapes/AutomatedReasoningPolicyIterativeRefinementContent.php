<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartAutomatedReasoningPolicyBuildWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutomatedReasoningPolicyBuildWorkflowDocument> $documents
 * @property string|null $feedback
 */
class AutomatedReasoningPolicyIterativeRefinementContent extends Shape
{
    /**
     * @param array{
     *     documents: list<AutomatedReasoningPolicyBuildWorkflowDocument>,
     *     feedback?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
