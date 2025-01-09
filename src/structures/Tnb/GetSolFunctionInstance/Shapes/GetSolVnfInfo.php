<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STARTED'|'STOPPED' $vnfState
 * @property list<GetSolVnfcResourceInfo> $vnfcResourceInfo
 */
class GetSolVnfInfo extends Shape
{
    /**
     * @param array{
     *     vnfState?: 'STARTED'|'STOPPED',
     *     vnfcResourceInfo?: list<GetSolVnfcResourceInfo>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
