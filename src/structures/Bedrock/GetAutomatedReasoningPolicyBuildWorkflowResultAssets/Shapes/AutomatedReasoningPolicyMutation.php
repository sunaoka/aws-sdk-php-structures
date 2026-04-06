<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningPolicyAddTypeMutation|null $addType
 * @property AutomatedReasoningPolicyUpdateTypeMutation|null $updateType
 * @property AutomatedReasoningPolicyDeleteTypeMutation|null $deleteType
 * @property AutomatedReasoningPolicyAddVariableMutation|null $addVariable
 * @property AutomatedReasoningPolicyUpdateVariableMutation|null $updateVariable
 * @property AutomatedReasoningPolicyDeleteVariableMutation|null $deleteVariable
 * @property AutomatedReasoningPolicyAddRuleMutation|null $addRule
 * @property AutomatedReasoningPolicyUpdateRuleMutation|null $updateRule
 * @property AutomatedReasoningPolicyDeleteRuleMutation|null $deleteRule
 */
class AutomatedReasoningPolicyMutation extends Shape
{
    /**
     * @param array{
     *     addType?: AutomatedReasoningPolicyAddTypeMutation|null,
     *     updateType?: AutomatedReasoningPolicyUpdateTypeMutation|null,
     *     deleteType?: AutomatedReasoningPolicyDeleteTypeMutation|null,
     *     addVariable?: AutomatedReasoningPolicyAddVariableMutation|null,
     *     updateVariable?: AutomatedReasoningPolicyUpdateVariableMutation|null,
     *     deleteVariable?: AutomatedReasoningPolicyDeleteVariableMutation|null,
     *     addRule?: AutomatedReasoningPolicyAddRuleMutation|null,
     *     updateRule?: AutomatedReasoningPolicyUpdateRuleMutation|null,
     *     deleteRule?: AutomatedReasoningPolicyDeleteRuleMutation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
