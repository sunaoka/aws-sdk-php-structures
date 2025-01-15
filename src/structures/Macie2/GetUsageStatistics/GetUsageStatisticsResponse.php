<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageStatistics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $nextToken
 * @property list<Shapes\UsageRecord>|null $records
 * @property 'MONTH_TO_DATE'|'PAST_30_DAYS'|null $timeRange
 */
class GetUsageStatisticsResponse extends Response
{
}
