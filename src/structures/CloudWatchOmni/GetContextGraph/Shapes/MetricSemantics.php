<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetContextGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property string|null $unit
 */
class MetricSemantics extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     unit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
