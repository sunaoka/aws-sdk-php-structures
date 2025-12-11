<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutomatedReasoningPolicyScenario> $policyScenarios
 */
class AutomatedReasoningPolicyScenarios extends Shape
{
    /**
     * @param array{policyScenarios: list<AutomatedReasoningPolicyScenario>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
