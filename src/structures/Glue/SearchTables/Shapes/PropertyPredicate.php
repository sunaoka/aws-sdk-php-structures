<?php

namespace Sunaoka\Aws\Structures\Glue\SearchTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 * @property 'EQUALS'|'GREATER_THAN'|'LESS_THAN'|'GREATER_THAN_EQUALS'|'LESS_THAN_EQUALS' $Comparator
 */
class PropertyPredicate extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Value?: string,
     *     Comparator?: 'EQUALS'|'GREATER_THAN'|'LESS_THAN'|'GREATER_THAN_EQUALS'|'LESS_THAN_EQUALS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
