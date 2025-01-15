<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteClientVpnRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'creating'|'active'|'failed'|'deleting'|null $Code
 * @property string|null $Message
 */
class ClientVpnRouteStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'creating'|'active'|'failed'|'deleting'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
