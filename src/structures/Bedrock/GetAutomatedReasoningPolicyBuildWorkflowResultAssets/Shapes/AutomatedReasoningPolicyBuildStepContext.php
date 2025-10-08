<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningPolicyPlanning|null $planning
 * @property AutomatedReasoningPolicyMutation|null $mutation
 */
class AutomatedReasoningPolicyBuildStepContext extends Shape
{
    /**
     * @param array{
     *     planning?: AutomatedReasoningPolicyPlanning|null,
     *     mutation?: AutomatedReasoningPolicyMutation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
