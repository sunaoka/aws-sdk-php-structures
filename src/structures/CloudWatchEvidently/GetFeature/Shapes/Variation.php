<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetFeature\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property VariableValue|null $value
 */
class Variation extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     value?: VariableValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
