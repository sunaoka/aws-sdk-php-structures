<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeResourcePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 50> $limit
 */
class DescribeResourcePoliciesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     limit?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
