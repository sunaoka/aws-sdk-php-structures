<?php

namespace Sunaoka\Aws\Structures\Connect\StopContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code
 */
class DisconnectReason extends Shape
{
    /**
     * @param array{Code?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
