<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SocketAddress $address
 * @property int $mtu
 * @property string $name
 * @property 'created'|'creating'|'deleted'|'deleting'|'failed' $status
 */
class DataflowEndpoint extends Shape
{
    /**
     * @param array{
     *     address?: SocketAddress,
     *     mtu?: int,
     *     name?: string,
     *     status?: 'created'|'creating'|'deleted'|'deleting'|'failed'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
