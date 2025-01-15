<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeregisterTransitGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GlobalNetworkId
 * @property string|null $TransitGatewayArn
 * @property TransitGatewayRegistrationStateReason|null $State
 */
class TransitGatewayRegistration extends Shape
{
    /**
     * @param array{
     *     GlobalNetworkId?: string|null,
     *     TransitGatewayArn?: string|null,
     *     State?: TransitGatewayRegistrationStateReason|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
