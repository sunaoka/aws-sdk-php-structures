<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QuerySpatialCoverage $QuerySpatialCoverage
 * @property QueryTemporalRange $QueryTemporalRange
 * @property int $QueryTableCount
 * @property int $OutputRows
 * @property int $OutputBytes
 */
class ScheduledQueryInsightsResponse extends Shape
{
    /**
     * @param array{
     *     QuerySpatialCoverage?: QuerySpatialCoverage,
     *     QueryTemporalRange?: QueryTemporalRange,
     *     QueryTableCount?: int,
     *     OutputRows?: int,
     *     OutputBytes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
