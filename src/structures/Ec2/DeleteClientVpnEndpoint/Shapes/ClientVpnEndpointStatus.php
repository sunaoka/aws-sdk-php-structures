<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending-associate'|'available'|'deleting'|'deleted'|null $Code
 * @property string|null $Message
 */
class ClientVpnEndpointStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'pending-associate'|'available'|'deleting'|'deleted'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
