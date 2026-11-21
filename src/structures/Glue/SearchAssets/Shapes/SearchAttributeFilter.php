<?php

namespace Sunaoka\Aws\Structures\Glue\SearchAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Attribute
 * @property 'EQUALS'|'GREATER_THAN'|'GREATER_THAN_OR_EQUALS'|'LESS_THAN'|'LESS_THAN_OR_EQUALS'|'NOT_EXISTS'|null $Comparator
 * @property SearchFilterValue|null $Value
 */
class SearchAttributeFilter extends Shape
{
    /**
     * @param array{
     *     Attribute: string,
     *     Comparator?: 'EQUALS'|'GREATER_THAN'|'GREATER_THAN_OR_EQUALS'|'LESS_THAN'|'LESS_THAN_OR_EQUALS'|'NOT_EXISTS'|null,
     *     Value?: SearchFilterValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
