<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAutomatedReasoningPolicyBuildWorkflows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class ListAutomatedReasoningPolicyBuildWorkflowsRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
