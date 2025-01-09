<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolFunctionInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STARTED'|'STOPPED' $vnfState
 */
class GetSolInstantiatedVnfInfo extends Shape
{
    /**
     * @param array{vnfState?: 'STARTED'|'STOPPED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
