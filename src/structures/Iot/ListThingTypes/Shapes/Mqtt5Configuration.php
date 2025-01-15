<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PropagatingAttribute>|null $propagatingAttributes
 */
class Mqtt5Configuration extends Shape
{
    /**
     * @param array{propagatingAttributes?: list<PropagatingAttribute>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
