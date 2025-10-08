<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $version
 * @property list<AutomatedReasoningPolicyDefinitionType>|null $types
 * @property list<AutomatedReasoningPolicyDefinitionRule>|null $rules
 * @property list<AutomatedReasoningPolicyDefinitionVariable>|null $variables
 */
class AutomatedReasoningPolicyDefinition extends Shape
{
    /**
     * @param array{
     *     version?: string|null,
     *     types?: list<AutomatedReasoningPolicyDefinitionType>|null,
     *     rules?: list<AutomatedReasoningPolicyDefinitionRule>|null,
     *     variables?: list<AutomatedReasoningPolicyDefinitionVariable>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
