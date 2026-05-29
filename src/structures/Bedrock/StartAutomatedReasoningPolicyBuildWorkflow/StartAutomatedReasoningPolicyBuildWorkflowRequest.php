<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartAutomatedReasoningPolicyBuildWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property 'INGEST_CONTENT'|'REFINE_POLICY'|'IMPORT_POLICY'|'GENERATE_FIDELITY_REPORT'|'GENERATE_POLICY_SCENARIOS'|'RESOLVE_POLICY_AMBIGUITIES'|'ITERATIVELY_REFINE_POLICY' $buildWorkflowType
 * @property string|null $clientRequestToken
 * @property Shapes\AutomatedReasoningPolicyBuildWorkflowSource $sourceContent
 */
class StartAutomatedReasoningPolicyBuildWorkflowRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     buildWorkflowType: 'INGEST_CONTENT'|'REFINE_POLICY'|'IMPORT_POLICY'|'GENERATE_FIDELITY_REPORT'|'GENERATE_POLICY_SCENARIOS'|'RESOLVE_POLICY_AMBIGUITIES'|'ITERATIVELY_REFINE_POLICY',
     *     clientRequestToken?: string|null,
     *     sourceContent: Shapes\AutomatedReasoningPolicyBuildWorkflowSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
