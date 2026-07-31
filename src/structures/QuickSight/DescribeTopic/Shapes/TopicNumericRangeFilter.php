<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Inclusive
 * @property TopicRangeFilterConstant|null $Constant
 * @property 'NO_AGGREGATION'|'SUM'|'AVERAGE'|'COUNT'|'DISTINCT_COUNT'|'MAX'|'MEDIAN'|'MIN'|'STDEV'|'STDEVP'|'VAR'|'VARP'|null $Aggregation
 * @property bool|null $Inverse
 * @property 'ALL_VALUES'|'NON_NULLS_ONLY'|'NULLS_ONLY'|null $NullFilter
 */
class TopicNumericRangeFilter extends Shape
{
    /**
     * @param array{
     *     Inclusive?: bool|null,
     *     Constant?: TopicRangeFilterConstant|null,
     *     Aggregation?: 'NO_AGGREGATION'|'SUM'|'AVERAGE'|'COUNT'|'DISTINCT_COUNT'|'MAX'|'MEDIAN'|'MIN'|'STDEV'|'STDEVP'|'VAR'|'VARP'|null,
     *     Inverse?: bool|null,
     *     NullFilter?: 'ALL_VALUES'|'NON_NULLS_ONLY'|'NULLS_ONLY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
