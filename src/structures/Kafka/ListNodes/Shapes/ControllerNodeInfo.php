<?php

namespace Sunaoka\Aws\Structures\Kafka\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Endpoints
 */
class ControllerNodeInfo extends Shape
{
    /**
     * @param array{Endpoints?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
