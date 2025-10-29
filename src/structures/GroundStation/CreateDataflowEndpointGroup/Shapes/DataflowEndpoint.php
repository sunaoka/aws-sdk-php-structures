<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property SocketAddress|null $address
 * @property 'created'|'creating'|'deleted'|'deleting'|'failed'|null $status
 * @property int<1400, 1500>|null $mtu
 */
class DataflowEndpoint extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     address?: SocketAddress|null,
     *     status?: 'created'|'creating'|'deleted'|'deleting'|'failed'|null,
     *     mtu?: int<1400, 1500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
