<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationUtilization;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\UtilizationByTime> $UtilizationsByTime
 * @property Shapes\ReservationAggregates $Total
 * @property string $NextPageToken
 */
class GetReservationUtilizationResponse extends Response
{
}
