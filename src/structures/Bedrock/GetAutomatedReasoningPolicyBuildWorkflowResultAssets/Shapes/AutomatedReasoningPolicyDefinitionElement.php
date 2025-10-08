<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningPolicyDefinitionVariable|null $policyDefinitionVariable
 * @property AutomatedReasoningPolicyDefinitionType|null $policyDefinitionType
 * @property AutomatedReasoningPolicyDefinitionRule|null $policyDefinitionRule
 */
class AutomatedReasoningPolicyDefinitionElement extends Shape
{
    /**
     * @param array{
     *     policyDefinitionVariable?: AutomatedReasoningPolicyDefinitionVariable|null,
     *     policyDefinitionType?: AutomatedReasoningPolicyDefinitionType|null,
     *     policyDefinitionRule?: AutomatedReasoningPolicyDefinitionRule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
