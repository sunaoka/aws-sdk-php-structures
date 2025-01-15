<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CoverageByTime> $CoveragesByTime
 * @property Shapes\Coverage|null $Total
 * @property string|null $NextPageToken
 */
class GetReservationCoverageResponse extends Response
{
}
