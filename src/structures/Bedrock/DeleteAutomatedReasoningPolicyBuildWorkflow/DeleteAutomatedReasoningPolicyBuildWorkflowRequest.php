<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteAutomatedReasoningPolicyBuildWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property string $buildWorkflowId
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class DeleteAutomatedReasoningPolicyBuildWorkflowRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     buildWorkflowId: string,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
