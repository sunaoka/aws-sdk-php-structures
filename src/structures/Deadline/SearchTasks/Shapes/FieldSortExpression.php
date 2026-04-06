<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property string $name
 */
class FieldSortExpression extends Shape
{
    /**
     * @param array{
     *     sortOrder: 'ASCENDING'|'DESCENDING',
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
