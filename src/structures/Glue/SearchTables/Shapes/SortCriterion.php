<?php

namespace Sunaoka\Aws\Structures\Glue\SearchTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldName
 * @property 'ASC'|'DESC' $Sort
 */
class SortCriterion extends Shape
{
    /**
     * @param array{
     *     FieldName?: string,
     *     Sort?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
