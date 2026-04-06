<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutomatedReasoningPolicyGeneratedTestCase> $generatedTestCases
 */
class AutomatedReasoningPolicyGeneratedTestCases extends Shape
{
    /**
     * @param array{generatedTestCases: list<AutomatedReasoningPolicyGeneratedTestCase>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
