<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $typeCount
 * @property int $variableCount
 * @property int $ruleCount
 * @property list<string> $unusedTypes
 * @property list<AutomatedReasoningPolicyDefinitionTypeValuePair> $unusedTypeValues
 * @property list<string> $unusedVariables
 * @property list<string> $conflictingRules
 * @property list<AutomatedReasoningPolicyDisjointRuleSet> $disjointRuleSets
 */
class AutomatedReasoningPolicyDefinitionQualityReport extends Shape
{
    /**
     * @param array{
     *     typeCount: int,
     *     variableCount: int,
     *     ruleCount: int,
     *     unusedTypes: list<string>,
     *     unusedTypeValues: list<AutomatedReasoningPolicyDefinitionTypeValuePair>,
     *     unusedVariables: list<string>,
     *     conflictingRules: list<string>,
     *     disjointRuleSets: list<AutomatedReasoningPolicyDisjointRuleSet>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
