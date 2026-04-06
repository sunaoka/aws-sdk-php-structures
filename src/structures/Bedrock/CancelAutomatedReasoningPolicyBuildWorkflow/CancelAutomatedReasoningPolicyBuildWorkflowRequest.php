<?php

namespace Sunaoka\Aws\Structures\Bedrock\CancelAutomatedReasoningPolicyBuildWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property string $buildWorkflowId
 */
class CancelAutomatedReasoningPolicyBuildWorkflowRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     buildWorkflowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
