<?php

namespace Sunaoka\Aws\Structures\Glue\SearchAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Attribute
 * @property 'equals'|'greaterThan'|'greaterThanOrEquals'|'lessThan'|'lessThanOrEquals'|'notExists' $Operator
 * @property SearchFilterValue|null $Value
 */
class SearchAttributeFilter extends Shape
{
    /**
     * @param array{
     *     Attribute: string,
     *     Operator: 'equals'|'greaterThan'|'greaterThanOrEquals'|'lessThan'|'lessThanOrEquals'|'notExists',
     *     Value?: SearchFilterValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
