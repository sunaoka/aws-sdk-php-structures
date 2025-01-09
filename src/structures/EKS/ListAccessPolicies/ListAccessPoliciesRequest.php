<?php

namespace Sunaoka\Aws\Structures\EKS\ListAccessPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListAccessPoliciesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
