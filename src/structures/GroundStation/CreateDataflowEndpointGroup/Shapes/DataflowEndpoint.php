<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SocketAddress|null $address
 * @property int<1400, 1500>|null $mtu
 * @property string|null $name
 * @property 'created'|'creating'|'deleted'|'deleting'|'failed'|null $status
 */
class DataflowEndpoint extends Shape
{
    /**
     * @param array{
     *     address?: SocketAddress|null,
     *     mtu?: int<1400, 1500>|null,
     *     name?: string|null,
     *     status?: 'created'|'creating'|'deleted'|'deleting'|'failed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
