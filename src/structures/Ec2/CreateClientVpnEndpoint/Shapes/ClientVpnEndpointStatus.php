<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending-associate'|'available'|'deleting'|'deleted' $Code
 * @property string $Message
 */
class ClientVpnEndpointStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'pending-associate'|'available'|'deleting'|'deleted',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
