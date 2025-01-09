<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeSubscriptionFilters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $filterNamePrefix
 * @property string $nextToken
 * @property int $limit
 */
class DescribeSubscriptionFiltersRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     filterNamePrefix?: string,
     *     nextToken?: string,
     *     limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
