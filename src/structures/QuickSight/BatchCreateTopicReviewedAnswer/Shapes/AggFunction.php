<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUM'|'MIN'|'MAX'|'COUNT'|'AVERAGE'|'DISTINCT_COUNT'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'|'MEDIAN'|'PTD_SUM'|'PTD_MIN'|'PTD_MAX'|'PTD_COUNT'|'PTD_DISTINCT_COUNT'|'PTD_AVERAGE'|'COLUMN'|'CUSTOM'|null $Aggregation
 * @property array<string, string>|null $AggregationFunctionParameters
 * @property 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR'|null $Period
 * @property string|null $PeriodField
 */
class AggFunction extends Shape
{
    /**
     * @param array{
     *     Aggregation?: 'SUM'|'MIN'|'MAX'|'COUNT'|'AVERAGE'|'DISTINCT_COUNT'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'|'MEDIAN'|'PTD_SUM'|'PTD_MIN'|'PTD_MAX'|'PTD_COUNT'|'PTD_DISTINCT_COUNT'|'PTD_AVERAGE'|'COLUMN'|'CUSTOM'|null,
     *     AggregationFunctionParameters?: array<string, string>|null,
     *     Period?: 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR'|null,
     *     PeriodField?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
