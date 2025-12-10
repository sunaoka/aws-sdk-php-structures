<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningPolicyDefinition|null $policyDefinition
 * @property AutomatedReasoningPolicyDefinitionQualityReport|null $qualityReport
 * @property AutomatedReasoningPolicyBuildLog|null $buildLog
 * @property AutomatedReasoningPolicyGeneratedTestCases|null $generatedTestCases
 * @property AutomatedReasoningPolicyScenarios|null $policyScenarios
 */
class AutomatedReasoningPolicyBuildResultAssets extends Shape
{
    /**
     * @param array{
     *     policyDefinition?: AutomatedReasoningPolicyDefinition|null,
     *     qualityReport?: AutomatedReasoningPolicyDefinitionQualityReport|null,
     *     buildLog?: AutomatedReasoningPolicyBuildLog|null,
     *     generatedTestCases?: AutomatedReasoningPolicyGeneratedTestCases|null,
     *     policyScenarios?: AutomatedReasoningPolicyScenarios|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
