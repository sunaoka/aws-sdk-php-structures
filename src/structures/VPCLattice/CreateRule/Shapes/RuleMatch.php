<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpMatch $httpMatch
 */
class RuleMatch extends Shape
{
    /**
     * @param array{httpMatch?: HttpMatch} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
