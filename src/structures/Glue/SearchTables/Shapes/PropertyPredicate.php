<?php

namespace Sunaoka\Aws\Structures\Glue\SearchTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $Value
 * @property 'EQUALS'|'GREATER_THAN'|'LESS_THAN'|'GREATER_THAN_EQUALS'|'LESS_THAN_EQUALS'|null $Comparator
 */
class PropertyPredicate extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Value?: string|null,
     *     Comparator?: 'EQUALS'|'GREATER_THAN'|'LESS_THAN'|'GREATER_THAN_EQUALS'|'LESS_THAN_EQUALS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
