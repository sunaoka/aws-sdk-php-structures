<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningPolicyAnnotatedLine|null $line
 */
class AutomatedReasoningPolicyAnnotatedContent extends Shape
{
    /**
     * @param array{line?: AutomatedReasoningPolicyAnnotatedLine|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
