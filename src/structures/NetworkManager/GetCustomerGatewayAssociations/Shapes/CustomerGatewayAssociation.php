<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCustomerGatewayAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomerGatewayArn
 * @property string $GlobalNetworkId
 * @property string $DeviceId
 * @property string $LinkId
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'DELETED' $State
 */
class CustomerGatewayAssociation extends Shape
{
    /**
     * @param array{
     *     CustomerGatewayArn?: string,
     *     GlobalNetworkId?: string,
     *     DeviceId?: string,
     *     LinkId?: string,
     *     State?: 'PENDING'|'AVAILABLE'|'DELETING'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
