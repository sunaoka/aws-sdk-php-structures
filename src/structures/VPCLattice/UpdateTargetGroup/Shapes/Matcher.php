<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateTargetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $httpCode
 */
class Matcher extends Shape
{
    /**
     * @param array{httpCode?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
