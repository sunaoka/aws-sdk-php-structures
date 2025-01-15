<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchThings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thingArn
 * @property string|null $thingName
 */
class Thing extends Shape
{
    /**
     * @param array{
     *     thingArn?: string|null,
     *     thingName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
