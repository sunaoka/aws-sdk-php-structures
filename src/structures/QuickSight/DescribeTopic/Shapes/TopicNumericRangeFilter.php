<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Inclusive
 * @property TopicRangeFilterConstant $Constant
 * @property 'NO_AGGREGATION'|'SUM'|'AVERAGE'|'COUNT'|'DISTINCT_COUNT'|'MAX'|'MEDIAN'|'MIN'|'STDEV'|'STDEVP'|'VAR'|'VARP' $Aggregation
 */
class TopicNumericRangeFilter extends Shape
{
    /**
     * @param array{
     *     Inclusive?: bool,
     *     Constant?: TopicRangeFilterConstant,
     *     Aggregation?: 'NO_AGGREGATION'|'SUM'|'AVERAGE'|'COUNT'|'DISTINCT_COUNT'|'MAX'|'MEDIAN'|'MIN'|'STDEV'|'STDEVP'|'VAR'|'VARP'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
