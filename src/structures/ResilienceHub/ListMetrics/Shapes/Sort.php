<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ascending
 * @property string $field
 */
class Sort extends Shape
{
    /**
     * @param array{
     *     ascending?: bool|null,
     *     field: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
