<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetTopPathStatisticsByTraffic;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\PathStatistics> $PathStatistics
 * @property int<0, max> $TotalRequestCount
 * @property string|null $NextMarker
 * @property list<Shapes\PathStatistics>|null $TopCategories
 */
class GetTopPathStatisticsByTrafficResponse extends Response
{
}
