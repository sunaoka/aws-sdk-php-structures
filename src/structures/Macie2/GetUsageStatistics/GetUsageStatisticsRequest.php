<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\UsageStatisticsFilter>|null $filterBy
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\UsageStatisticsSortBy|null $sortBy
 * @property 'MONTH_TO_DATE'|'PAST_30_DAYS'|null $timeRange
 */
class GetUsageStatisticsRequest extends Request
{
    /**
     * @param array{
     *     filterBy?: list<Shapes\UsageStatisticsFilter>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     sortBy?: Shapes\UsageStatisticsSortBy|null,
     *     timeRange?: 'MONTH_TO_DATE'|'PAST_30_DAYS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
