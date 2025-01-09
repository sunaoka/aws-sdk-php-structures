<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\UsageStatisticsFilter> $filterBy
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\UsageStatisticsSortBy $sortBy
 * @property 'MONTH_TO_DATE'|'PAST_30_DAYS' $timeRange
 */
class GetUsageStatisticsRequest extends Request
{
    /**
     * @param array{
     *     filterBy?: list<Shapes\UsageStatisticsFilter>,
     *     maxResults?: int,
     *     nextToken?: string,
     *     sortBy?: Shapes\UsageStatisticsSortBy,
     *     timeRange?: 'MONTH_TO_DATE'|'PAST_30_DAYS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
