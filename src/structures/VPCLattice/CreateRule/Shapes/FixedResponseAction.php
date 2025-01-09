<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<100, 599> $statusCode
 */
class FixedResponseAction extends Shape
{
    /**
     * @param array{statusCode: int<100, 599>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
