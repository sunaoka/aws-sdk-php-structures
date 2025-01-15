<?php

namespace Sunaoka\Aws\Structures\FMS\GetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535>|null $From
 * @property int<0, 65535>|null $To
 */
class NetworkAclPortRange extends Shape
{
    /**
     * @param array{
     *     From?: int<0, 65535>|null,
     *     To?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
