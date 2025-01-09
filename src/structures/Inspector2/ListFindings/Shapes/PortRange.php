<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535> $begin
 * @property int<0, 65535> $end
 */
class PortRange extends Shape
{
    /**
     * @param array{
     *     begin: int<0, 65535>,
     *     end: int<0, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
