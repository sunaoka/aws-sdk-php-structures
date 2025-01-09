<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayPeering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MissingPermission
 */
class PermissionsErrorContext extends Shape
{
    /**
     * @param array{MissingPermission?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
