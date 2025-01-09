<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchThings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thingArn
 * @property string $thingName
 */
class Thing extends Shape
{
    /**
     * @param array{
     *     thingArn?: string,
     *     thingName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
