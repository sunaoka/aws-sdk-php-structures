<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Passthrough|null $Passthrough
 * @property int<32, 8190>|null $Set
 */
class ProgramClockReferencePidConfiguration extends Shape
{
    /**
     * @param array{
     *     Passthrough?: Passthrough|null,
     *     Set?: int<32, 8190>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
