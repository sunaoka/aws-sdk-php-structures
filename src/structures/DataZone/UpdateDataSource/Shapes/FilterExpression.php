<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property 'INCLUDE'|'EXCLUDE' $type
 */
class FilterExpression extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     type: 'INCLUDE'|'EXCLUDE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
