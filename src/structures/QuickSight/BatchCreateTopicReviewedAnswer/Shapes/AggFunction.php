<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUM'|'MIN'|'MAX'|'COUNT'|'AVERAGE'|'DISTINCT_COUNT'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'|'MEDIAN'|'PTD_SUM'|'PTD_MIN'|'PTD_MAX'|'PTD_COUNT'|'PTD_DISTINCT_COUNT'|'PTD_AVERAGE'|'COLUMN'|'CUSTOM' $Aggregation
 * @property array<string, string> $AggregationFunctionParameters
 * @property 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR' $Period
 * @property string $PeriodField
 */
class AggFunction extends Shape
{
    /**
     * @param array{
     *     Aggregation?: 'SUM'|'MIN'|'MAX'|'COUNT'|'AVERAGE'|'DISTINCT_COUNT'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'|'MEDIAN'|'PTD_SUM'|'PTD_MIN'|'PTD_MAX'|'PTD_COUNT'|'PTD_DISTINCT_COUNT'|'PTD_AVERAGE'|'COLUMN'|'CUSTOM',
     *     AggregationFunctionParameters?: array<string, string>,
     *     Period?: 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR',
     *     PeriodField?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
