<?php

namespace Sunaoka\Aws\Structures\Emr\GetBlockPublicAccessConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinRange
 * @property int $MaxRange
 */
class PortRange extends Shape
{
    /**
     * @param array{
     *     MinRange: int,
     *     MaxRange?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
