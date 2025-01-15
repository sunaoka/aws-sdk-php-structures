<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STARTED'|'STOPPED'|null $vnfState
 * @property list<GetSolVnfcResourceInfo>|null $vnfcResourceInfo
 */
class GetSolVnfInfo extends Shape
{
    /**
     * @param array{
     *     vnfState?: 'STARTED'|'STOPPED'|null,
     *     vnfcResourceInfo?: list<GetSolVnfcResourceInfo>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
