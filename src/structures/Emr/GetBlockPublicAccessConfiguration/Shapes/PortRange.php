<?php

namespace Sunaoka\Aws\Structures\Emr\GetBlockPublicAccessConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1, 65535> $MinRange
 * @property int<-1, 65535>|null $MaxRange
 */
class PortRange extends Shape
{
    /**
     * @param array{
     *     MinRange: int<-1, 65535>,
     *     MaxRange?: int<-1, 65535>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
