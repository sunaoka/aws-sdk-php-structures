<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $coverageScore
 * @property double $accuracyScore
 * @property array<string, AutomatedReasoningPolicyRuleReport> $ruleReports
 * @property array<string, AutomatedReasoningPolicyVariableReport> $variableReports
 * @property list<AutomatedReasoningPolicyReportSourceDocument> $documentSources
 */
class AutomatedReasoningPolicyFidelityReport extends Shape
{
    /**
     * @param array{
     *     coverageScore: double,
     *     accuracyScore: double,
     *     ruleReports: array<string, AutomatedReasoningPolicyRuleReport>,
     *     variableReports: array<string, AutomatedReasoningPolicyVariableReport>,
     *     documentSources: list<AutomatedReasoningPolicyReportSourceDocument>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
