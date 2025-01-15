<?php

namespace Sunaoka\Aws\Structures\Connect\StopContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Code
 */
class DisconnectReason extends Shape
{
    /**
     * @param array{Code?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
