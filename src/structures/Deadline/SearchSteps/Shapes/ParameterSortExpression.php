<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 */
class ParameterSortExpression extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     sortOrder: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
