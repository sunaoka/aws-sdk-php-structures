<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXACT'|'CONTAINS' $CategoryFilterFunction
 * @property 'CUSTOM_FILTER'|'CUSTOM_FILTER_LIST'|'FILTER_LIST' $CategoryFilterType
 * @property TopicCategoryFilterConstant $Constant
 * @property bool $Inverse
 */
class TopicCategoryFilter extends Shape
{
    /**
     * @param array{
     *     CategoryFilterFunction?: 'EXACT'|'CONTAINS',
     *     CategoryFilterType?: 'CUSTOM_FILTER'|'CUSTOM_FILTER_LIST'|'FILTER_LIST',
     *     Constant?: TopicCategoryFilterConstant,
     *     Inverse?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
