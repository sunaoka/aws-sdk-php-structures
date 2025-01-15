<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Min'|'Max'|'Sum'|'Avg'|'Count'|null $aggregation
 * @property string $name
 */
class Field extends Shape
{
    /**
     * @param array{
     *     aggregation?: 'Min'|'Max'|'Sum'|'Avg'|'Count'|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
