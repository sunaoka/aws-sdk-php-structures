<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\StartQueryPerformanceMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $field
 * @property 'EQUALS'|'NOT_EQUALS'|'IN'|'CONTAINS' $operator
 * @property list<string> $values
 */
class FilterParameter extends Shape
{
    /**
     * @param array{
     *     field: string,
     *     operator: 'EQUALS'|'NOT_EQUALS'|'IN'|'CONTAINS',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
