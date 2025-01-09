<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $from
 * @property int $to
 */
class PortRange extends Shape
{
    /**
     * @param array{
     *     from: int,
     *     to: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
