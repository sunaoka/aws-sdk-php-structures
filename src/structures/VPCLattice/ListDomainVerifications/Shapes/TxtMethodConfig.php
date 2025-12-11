<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListDomainVerifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property string $name
 */
class TxtMethodConfig extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
