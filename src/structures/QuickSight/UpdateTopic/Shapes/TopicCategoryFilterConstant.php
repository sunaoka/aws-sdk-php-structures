<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SINGULAR'|'RANGE'|'COLLECTIVE' $ConstantType
 * @property string $SingularConstant
 * @property CollectiveConstant $CollectiveConstant
 */
class TopicCategoryFilterConstant extends Shape
{
    /**
     * @param array{
     *     ConstantType?: 'SINGULAR'|'RANGE'|'COLLECTIVE',
     *     SingularConstant?: string,
     *     CollectiveConstant?: CollectiveConstant
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
