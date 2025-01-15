<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCustomerGatewayAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomerGatewayArn
 * @property string|null $GlobalNetworkId
 * @property string|null $DeviceId
 * @property string|null $LinkId
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'DELETED'|null $State
 */
class CustomerGatewayAssociation extends Shape
{
    /**
     * @param array{
     *     CustomerGatewayArn?: string|null,
     *     GlobalNetworkId?: string|null,
     *     DeviceId?: string|null,
     *     LinkId?: string|null,
     *     State?: 'PENDING'|'AVAILABLE'|'DELETING'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
