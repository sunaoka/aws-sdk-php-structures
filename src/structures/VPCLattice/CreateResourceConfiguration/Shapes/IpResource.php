<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateResourceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ipAddress
 */
class IpResource extends Shape
{
    /**
     * @param array{ipAddress?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
