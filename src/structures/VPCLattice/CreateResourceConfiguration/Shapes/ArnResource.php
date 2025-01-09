<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateResourceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 */
class ArnResource extends Shape
{
    /**
     * @param array{arn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
