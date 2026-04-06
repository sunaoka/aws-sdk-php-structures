<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identifier|null $MetricOperand
 * @property 'SUM'|'MIN'|'MAX'|'COUNT'|'AVERAGE'|'DISTINCT_COUNT'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'|'MEDIAN'|'PTD_SUM'|'PTD_MIN'|'PTD_MAX'|'PTD_COUNT'|'PTD_DISTINCT_COUNT'|'PTD_AVERAGE'|'COLUMN'|'CUSTOM'|null $Function
 * @property 'ASCENDING'|'DESCENDING'|null $SortDirection
 */
class FilterAggMetrics extends Shape
{
    /**
     * @param array{
     *     MetricOperand?: Identifier|null,
     *     Function?: 'SUM'|'MIN'|'MAX'|'COUNT'|'AVERAGE'|'DISTINCT_COUNT'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'|'MEDIAN'|'PTD_SUM'|'PTD_MIN'|'PTD_MAX'|'PTD_COUNT'|'PTD_DISTINCT_COUNT'|'PTD_AVERAGE'|'COLUMN'|'CUSTOM'|null,
     *     SortDirection?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
