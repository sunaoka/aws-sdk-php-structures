<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TopicSingularFilterConstant $Constant
 * @property 'NO_AGGREGATION'|'SUM'|'AVERAGE'|'COUNT'|'DISTINCT_COUNT'|'MAX'|'MEDIAN'|'MIN'|'STDEV'|'STDEVP'|'VAR'|'VARP' $Aggregation
 */
class TopicNumericEqualityFilter extends Shape
{
    /**
     * @param array{
     *     Constant?: TopicSingularFilterConstant,
     *     Aggregation?: 'NO_AGGREGATION'|'SUM'|'AVERAGE'|'COUNT'|'DISTINCT_COUNT'|'MAX'|'MEDIAN'|'MIN'|'STDEV'|'STDEVP'|'VAR'|'VARP'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
