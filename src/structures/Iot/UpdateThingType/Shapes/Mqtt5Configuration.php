<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateThingType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PropagatingAttribute> $propagatingAttributes
 */
class Mqtt5Configuration extends Shape
{
    /**
     * @param array{propagatingAttributes?: list<PropagatingAttribute>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
