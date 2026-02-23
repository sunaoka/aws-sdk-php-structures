<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyVariable
 * @property list<AutomatedReasoningPolicyStatementReference>|null $groundingStatements
 * @property list<string>|null $groundingJustifications
 * @property double|null $accuracyScore
 * @property string|null $accuracyJustification
 */
class AutomatedReasoningPolicyVariableReport extends Shape
{
    /**
     * @param array{
     *     policyVariable: string,
     *     groundingStatements?: list<AutomatedReasoningPolicyStatementReference>|null,
     *     groundingJustifications?: list<string>|null,
     *     accuracyScore?: double|null,
     *     accuracyJustification?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
