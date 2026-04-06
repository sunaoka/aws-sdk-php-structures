<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535> $from
 * @property int<0, 65535> $to
 */
class PortRange extends Shape
{
    /**
     * @param array{
     *     from: int<0, 65535>,
     *     to: int<0, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
