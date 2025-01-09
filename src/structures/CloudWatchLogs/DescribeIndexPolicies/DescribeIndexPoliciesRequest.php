<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeIndexPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $logGroupIdentifiers
 * @property string $nextToken
 */
class DescribeIndexPoliciesRequest extends Request
{
    /**
     * @param array{
     *     logGroupIdentifiers: list<string>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
