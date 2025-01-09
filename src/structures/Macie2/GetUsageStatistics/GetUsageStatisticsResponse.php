<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageStatistics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $nextToken
 * @property list<Shapes\UsageRecord> $records
 * @property 'MONTH_TO_DATE'|'PAST_30_DAYS' $timeRange
 */
class GetUsageStatisticsResponse extends Response
{
}
