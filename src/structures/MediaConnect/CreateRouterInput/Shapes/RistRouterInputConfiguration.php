<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3000, 30000> $Port
 * @property int<10, 10000> $RecoveryLatencyMilliseconds
 */
class RistRouterInputConfiguration extends Shape
{
    /**
     * @param array{
     *     Port: int<3000, 30000>,
     *     RecoveryLatencyMilliseconds: int<10, 10000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
