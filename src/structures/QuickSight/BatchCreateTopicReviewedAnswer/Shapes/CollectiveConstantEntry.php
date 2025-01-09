<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SINGULAR'|'RANGE'|'COLLECTIVE' $ConstantType
 * @property string $Value
 */
class CollectiveConstantEntry extends Shape
{
    /**
     * @param array{
     *     ConstantType?: 'SINGULAR'|'RANGE'|'COLLECTIVE',
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
