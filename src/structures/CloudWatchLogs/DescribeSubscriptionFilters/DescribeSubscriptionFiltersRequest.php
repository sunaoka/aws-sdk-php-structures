<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeSubscriptionFilters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string|null $filterNamePrefix
 * @property string|null $nextToken
 * @property int<1, 50>|null $limit
 */
class DescribeSubscriptionFiltersRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     filterNamePrefix?: string|null,
     *     nextToken?: string|null,
     *     limit?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
