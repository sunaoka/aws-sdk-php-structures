<?php

namespace Sunaoka\Aws\Structures\FMS\GetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $From
 * @property int $To
 */
class NetworkAclPortRange extends Shape
{
    /**
     * @param array{
     *     From?: int,
     *     To?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
