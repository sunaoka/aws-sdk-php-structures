<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Passthrough|null $Passthrough
 * @property int<0, 65535>|null $Set
 */
class TransportStreamIdConfiguration extends Shape
{
    /**
     * @param array{
     *     Passthrough?: Passthrough|null,
     *     Set?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
