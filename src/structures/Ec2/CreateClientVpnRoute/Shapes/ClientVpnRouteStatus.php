<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateClientVpnRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'creating'|'active'|'failed'|'deleting' $Code
 * @property string $Message
 */
class ClientVpnRouteStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'creating'|'active'|'failed'|'deleting',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
