<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR'|null $TimeGranularity
 * @property 'PREVIOUS'|'THIS'|'LAST'|'NEXT'|'NOW'|null $RelativeDateFilterFunction
 * @property TopicSingularFilterConstant|null $Constant
 */
class TopicRelativeDateFilter extends Shape
{
    /**
     * @param array{
     *     TimeGranularity?: 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR'|null,
     *     RelativeDateFilterFunction?: 'PREVIOUS'|'THIS'|'LAST'|'NEXT'|'NOW'|null,
     *     Constant?: TopicSingularFilterConstant|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
