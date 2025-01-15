<?php

namespace Sunaoka\Aws\Structures\Glue\SearchTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldName
 * @property 'ASC'|'DESC'|null $Sort
 */
class SortCriterion extends Shape
{
    /**
     * @param array{
     *     FieldName?: string|null,
     *     Sort?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
