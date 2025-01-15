<?php

namespace Sunaoka\Aws\Structures\Proton\ListComponentOutputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property string|null $valueString
 */
class Output extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     valueString?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
