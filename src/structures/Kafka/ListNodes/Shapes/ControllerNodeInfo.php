<?php

namespace Sunaoka\Aws\Structures\Kafka\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Endpoints
 */
class ControllerNodeInfo extends Shape
{
    /**
     * @param array{Endpoints?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
