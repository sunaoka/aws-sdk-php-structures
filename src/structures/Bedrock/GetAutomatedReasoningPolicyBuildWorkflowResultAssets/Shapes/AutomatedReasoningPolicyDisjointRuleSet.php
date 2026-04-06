<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $variables
 * @property list<string> $rules
 */
class AutomatedReasoningPolicyDisjointRuleSet extends Shape
{
    /**
     * @param array{
     *     variables: list<string>,
     *     rules: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
