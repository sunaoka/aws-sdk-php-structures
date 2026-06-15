<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRevenueStatistics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SourceStatistics>|null $SourceStatistics
 * @property list<Shapes\RevenuePathStatistics>|null $RevenuePathStatistics
 * @property string|null $NextMarker
 */
class GetRevenueStatisticsResponse extends Response
{
}
