<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QuerySpatialCoverage $QuerySpatialCoverage
 * @property QueryTemporalRange $QueryTemporalRange
 * @property int $QueryTableCount
 * @property int $OutputRows
 * @property int $OutputBytes
 * @property int $UnloadPartitionCount
 * @property int $UnloadWrittenRows
 * @property int $UnloadWrittenBytes
 */
class QueryInsightsResponse extends Shape
{
    /**
     * @param array{
     *     QuerySpatialCoverage?: QuerySpatialCoverage,
     *     QueryTemporalRange?: QueryTemporalRange,
     *     QueryTableCount?: int,
     *     OutputRows?: int,
     *     OutputBytes?: int,
     *     UnloadPartitionCount?: int,
     *     UnloadWrittenRows?: int,
     *     UnloadWrittenBytes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
