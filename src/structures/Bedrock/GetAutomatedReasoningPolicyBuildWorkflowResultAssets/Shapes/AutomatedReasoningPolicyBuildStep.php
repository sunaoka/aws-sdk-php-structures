<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningPolicyBuildStepContext $context
 * @property AutomatedReasoningPolicyDefinitionElement|null $priorElement
 * @property list<AutomatedReasoningPolicyBuildStepMessage> $messages
 */
class AutomatedReasoningPolicyBuildStep extends Shape
{
    /**
     * @param array{
     *     context: AutomatedReasoningPolicyBuildStepContext,
     *     priorElement?: AutomatedReasoningPolicyDefinitionElement|null,
     *     messages: list<AutomatedReasoningPolicyBuildStepMessage>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
