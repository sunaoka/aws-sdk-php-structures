<?php

namespace Sunaoka\Aws\Structures\Iot\ListBillingGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 * @property string $namePrefixFilter
 */
class ListBillingGroupsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 250>,
     *     namePrefixFilter?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
