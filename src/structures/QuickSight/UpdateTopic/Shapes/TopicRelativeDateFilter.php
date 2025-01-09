<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR' $TimeGranularity
 * @property 'PREVIOUS'|'THIS'|'LAST'|'NEXT'|'NOW' $RelativeDateFilterFunction
 * @property TopicSingularFilterConstant $Constant
 */
class TopicRelativeDateFilter extends Shape
{
    /**
     * @param array{
     *     TimeGranularity?: 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR',
     *     RelativeDateFilterFunction?: 'PREVIOUS'|'THIS'|'LAST'|'NEXT'|'NOW',
     *     Constant?: TopicSingularFilterConstant
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
