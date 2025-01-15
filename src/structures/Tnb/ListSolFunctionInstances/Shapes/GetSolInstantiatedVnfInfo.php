<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolFunctionInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STARTED'|'STOPPED'|null $vnfState
 */
class GetSolInstantiatedVnfInfo extends Shape
{
    /**
     * @param array{vnfState?: 'STARTED'|'STOPPED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
