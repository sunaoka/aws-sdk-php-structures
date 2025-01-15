<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SINGULAR'|'RANGE'|'COLLECTIVE'|null $ConstantType
 * @property string|null $Value
 */
class CollectiveConstantEntry extends Shape
{
    /**
     * @param array{
     *     ConstantType?: 'SINGULAR'|'RANGE'|'COLLECTIVE'|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
