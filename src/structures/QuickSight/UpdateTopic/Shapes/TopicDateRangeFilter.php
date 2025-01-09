<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Inclusive
 * @property TopicRangeFilterConstant $Constant
 */
class TopicDateRangeFilter extends Shape
{
    /**
     * @param array{
     *     Inclusive?: bool,
     *     Constant?: TopicRangeFilterConstant
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
