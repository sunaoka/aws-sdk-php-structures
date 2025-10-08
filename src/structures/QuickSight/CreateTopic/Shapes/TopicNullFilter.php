<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL_VALUES'|'NON_NULLS_ONLY'|'NULLS_ONLY'|null $NullFilterType
 * @property TopicSingularFilterConstant|null $Constant
 * @property bool|null $Inverse
 */
class TopicNullFilter extends Shape
{
    /**
     * @param array{
     *     NullFilterType?: 'ALL_VALUES'|'NON_NULLS_ONLY'|'NULLS_ONLY'|null,
     *     Constant?: TopicSingularFilterConstant|null,
     *     Inverse?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
