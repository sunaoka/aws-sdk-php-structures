<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyTestResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property string $buildWorkflowId
 * @property string $testCaseId
 */
class GetAutomatedReasoningPolicyTestResultRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     buildWorkflowId: string,
     *     testCaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
