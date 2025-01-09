<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageTotals;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'MONTH_TO_DATE'|'PAST_30_DAYS' $timeRange
 * @property list<Shapes\UsageTotal> $usageTotals
 */
class GetUsageTotalsResponse extends Response
{
}
