<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QuerySpatialCoverage|null $QuerySpatialCoverage
 * @property QueryTemporalRange|null $QueryTemporalRange
 * @property int|null $QueryTableCount
 * @property int|null $OutputRows
 * @property int|null $OutputBytes
 */
class ScheduledQueryInsightsResponse extends Shape
{
    /**
     * @param array{
     *     QuerySpatialCoverage?: QuerySpatialCoverage|null,
     *     QueryTemporalRange?: QueryTemporalRange|null,
     *     QueryTableCount?: int|null,
     *     OutputRows?: int|null,
     *     OutputBytes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
