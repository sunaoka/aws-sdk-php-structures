<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateDirectConnectGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $directConnectGatewayId
 * @property string $directConnectGatewayName
 * @property int $amazonSideAsn
 * @property string $ownerAccount
 * @property 'pending'|'available'|'deleting'|'deleted' $directConnectGatewayState
 * @property string $stateChangeError
 */
class DirectConnectGateway extends Shape
{
    /**
     * @param array{
     *     directConnectGatewayId?: string,
     *     directConnectGatewayName?: string,
     *     amazonSideAsn?: int,
     *     ownerAccount?: string,
     *     directConnectGatewayState?: 'pending'|'available'|'deleting'|'deleted',
     *     stateChangeError?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
