<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535> $From
 * @property int<0, 65535> $To
 */
class NetworkAclPortRange extends Shape
{
    /**
     * @param array{
     *     From?: int<0, 65535>,
     *     To?: int<0, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
