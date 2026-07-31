<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXACT'|'CONTAINS'|null $CategoryFilterFunction
 * @property 'CUSTOM_FILTER'|'CUSTOM_FILTER_LIST'|'FILTER_LIST'|null $CategoryFilterType
 * @property TopicCategoryFilterConstant|null $Constant
 * @property bool|null $Inverse
 * @property 'ALL_VALUES'|'NON_NULLS_ONLY'|'NULLS_ONLY'|null $NullFilter
 */
class TopicCategoryFilter extends Shape
{
    /**
     * @param array{
     *     CategoryFilterFunction?: 'EXACT'|'CONTAINS'|null,
     *     CategoryFilterType?: 'CUSTOM_FILTER'|'CUSTOM_FILTER_LIST'|'FILTER_LIST'|null,
     *     Constant?: TopicCategoryFilterConstant|null,
     *     Inverse?: bool|null,
     *     NullFilter?: 'ALL_VALUES'|'NON_NULLS_ONLY'|'NULLS_ONLY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
