<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SINGULAR'|'RANGE'|'COLLECTIVE'|null $ConstantType
 * @property string|null $SingularConstant
 * @property CollectiveConstant|null $CollectiveConstant
 */
class TopicCategoryFilterConstant extends Shape
{
    /**
     * @param array{
     *     ConstantType?: 'SINGULAR'|'RANGE'|'COLLECTIVE'|null,
     *     SingularConstant?: string|null,
     *     CollectiveConstant?: CollectiveConstant|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
