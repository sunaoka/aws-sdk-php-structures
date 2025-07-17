<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeResourcePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 50>|null $limit
 * @property string|null $resourceArn
 * @property 'ACCOUNT'|'RESOURCE'|null $policyScope
 */
class DescribeResourcePoliciesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     limit?: int<1, 50>|null,
     *     resourceArn?: string|null,
     *     policyScope?: 'ACCOUNT'|'RESOURCE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
