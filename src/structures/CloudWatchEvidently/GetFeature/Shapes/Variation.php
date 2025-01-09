<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetFeature\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property VariableValue $value
 */
class Variation extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     value?: VariableValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
