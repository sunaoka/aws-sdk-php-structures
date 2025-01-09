<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetTargetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $httpCode
 */
class Matcher extends Shape
{
    /**
     * @param array{httpCode?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
