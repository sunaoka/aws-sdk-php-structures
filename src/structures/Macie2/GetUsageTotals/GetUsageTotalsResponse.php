<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageTotals;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'MONTH_TO_DATE'|'PAST_30_DAYS'|null $timeRange
 * @property list<Shapes\UsageTotal>|null $usageTotals
 */
class GetUsageTotalsResponse extends Response
{
}
