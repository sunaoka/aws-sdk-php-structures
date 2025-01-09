<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetApproximateUsageRecords;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, int<0, max>> $Services
 * @property int<0, max> $TotalRecords
 * @property Shapes\DateInterval $LookbackPeriod
 */
class GetApproximateUsageRecordsResponse extends Response
{
}
