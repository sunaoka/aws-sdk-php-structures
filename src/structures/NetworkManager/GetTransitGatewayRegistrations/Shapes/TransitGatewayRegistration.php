<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GlobalNetworkId
 * @property string $TransitGatewayArn
 * @property TransitGatewayRegistrationStateReason $State
 */
class TransitGatewayRegistration extends Shape
{
    /**
     * @param array{
     *     GlobalNetworkId?: string,
     *     TransitGatewayArn?: string,
     *     State?: TransitGatewayRegistrationStateReason
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
