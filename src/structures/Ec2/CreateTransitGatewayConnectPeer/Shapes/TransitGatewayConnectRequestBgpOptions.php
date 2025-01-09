<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayConnectPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PeerAsn
 */
class TransitGatewayConnectRequestBgpOptions extends Shape
{
    /**
     * @param array{PeerAsn?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
