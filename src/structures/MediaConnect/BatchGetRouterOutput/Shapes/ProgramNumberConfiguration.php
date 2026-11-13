<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Passthrough|null $Passthrough
 * @property int<1, 65535>|null $Set
 */
class ProgramNumberConfiguration extends Shape
{
    /**
     * @param array{
     *     Passthrough?: Passthrough|null,
     *     Set?: int<1, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
