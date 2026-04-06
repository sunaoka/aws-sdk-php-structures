<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetApproximateUsageRecords;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, int<0, max>>|null $Services
 * @property int<0, max>|null $TotalRecords
 * @property Shapes\DateInterval|null $LookbackPeriod
 */
class GetApproximateUsageRecordsResponse extends Response
{
}
