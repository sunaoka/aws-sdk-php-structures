<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Inclusive
 * @property TopicRangeFilterConstant|null $Constant
 */
class TopicDateRangeFilter extends Shape
{
    /**
     * @param array{
     *     Inclusive?: bool|null,
     *     Constant?: TopicRangeFilterConstant|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
