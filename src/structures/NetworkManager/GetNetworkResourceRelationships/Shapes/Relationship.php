<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkResourceRelationships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $From
 * @property string $To
 */
class Relationship extends Shape
{
    /**
     * @param array{
     *     From?: string,
     *     To?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
