<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartAutomatedReasoningPolicyTestWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property string $buildWorkflowId
 * @property list<string>|null $testCaseIds
 * @property string|null $clientRequestToken
 */
class StartAutomatedReasoningPolicyTestWorkflowRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     buildWorkflowId: string,
     *     testCaseIds?: list<string>|null,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
