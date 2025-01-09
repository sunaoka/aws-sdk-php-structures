<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeResourcePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $limit
 */
class DescribeResourcePoliciesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
