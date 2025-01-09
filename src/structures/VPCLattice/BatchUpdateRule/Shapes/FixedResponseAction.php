<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $statusCode
 */
class FixedResponseAction extends Shape
{
    /**
     * @param array{statusCode: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
