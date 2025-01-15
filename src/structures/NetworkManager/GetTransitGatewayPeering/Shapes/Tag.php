<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayPeering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $Value
 */
class Tag extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
