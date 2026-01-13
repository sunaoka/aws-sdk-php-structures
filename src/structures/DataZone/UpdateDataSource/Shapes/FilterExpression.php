<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUDE'|'EXCLUDE' $type
 * @property string $expression
 */
class FilterExpression extends Shape
{
    /**
     * @param array{
     *     type: 'INCLUDE'|'EXCLUDE',
     *     expression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
