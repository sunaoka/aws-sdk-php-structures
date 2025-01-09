<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetResourceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ipAddress
 */
class IpResource extends Shape
{
    /**
     * @param array{ipAddress?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
