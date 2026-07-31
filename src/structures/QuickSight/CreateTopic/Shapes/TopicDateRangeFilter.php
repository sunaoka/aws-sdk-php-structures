<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Inclusive
 * @property TopicRangeFilterConstant|null $Constant
 * @property 'ALL_VALUES'|'NON_NULLS_ONLY'|'NULLS_ONLY'|null $NullFilter
 */
class TopicDateRangeFilter extends Shape
{
    /**
     * @param array{
     *     Inclusive?: bool|null,
     *     Constant?: TopicRangeFilterConstant|null,
     *     NullFilter?: 'ALL_VALUES'|'NON_NULLS_ONLY'|'NULLS_ONLY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
