<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $begin
 * @property int $end
 */
class PortRange extends Shape
{
    /**
     * @param array{
     *     begin: int,
     *     end: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
