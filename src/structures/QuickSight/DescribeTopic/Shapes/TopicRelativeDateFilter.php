<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR'|null $TimeGranularity
 * @property 'PREVIOUS'|'THIS'|'LAST'|'NEXT'|'NOW'|null $RelativeDateFilterFunction
 * @property TopicSingularFilterConstant|null $Constant
 * @property 'ALL_VALUES'|'NON_NULLS_ONLY'|'NULLS_ONLY'|null $NullFilter
 */
class TopicRelativeDateFilter extends Shape
{
    /**
     * @param array{
     *     TimeGranularity?: 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR'|null,
     *     RelativeDateFilterFunction?: 'PREVIOUS'|'THIS'|'LAST'|'NEXT'|'NOW'|null,
     *     Constant?: TopicSingularFilterConstant|null,
     *     NullFilter?: 'ALL_VALUES'|'NON_NULLS_ONLY'|'NULLS_ONLY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
