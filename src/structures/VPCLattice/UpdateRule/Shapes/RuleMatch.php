<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpMatch|null $httpMatch
 */
class RuleMatch extends Shape
{
    /**
     * @param array{httpMatch?: HttpMatch|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
