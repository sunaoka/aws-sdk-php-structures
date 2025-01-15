<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkResourceRelationships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $From
 * @property string|null $To
 */
class Relationship extends Shape
{
    /**
     * @param array{
     *     From?: string|null,
     *     To?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
