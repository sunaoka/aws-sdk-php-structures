<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property string $name
 */
class ParameterSortExpression extends Shape
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
