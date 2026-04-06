<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 */
class SharingConfig extends Shape
{
    /**
     * @param array{enabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
