<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $end
 * @property int $start
 */
class MatchRange extends Shape
{
    /**
     * @param array{
     *     end: int,
     *     start: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
