<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAutomatedReasoningPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $policyArn
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class ListAutomatedReasoningPoliciesRequest extends Request
{
    /**
     * @param array{
     *     policyArn?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
