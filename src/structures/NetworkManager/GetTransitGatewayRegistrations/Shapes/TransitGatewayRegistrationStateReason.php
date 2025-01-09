<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'DELETED'|'FAILED' $Code
 * @property string $Message
 */
class TransitGatewayRegistrationStateReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'PENDING'|'AVAILABLE'|'DELETING'|'DELETED'|'FAILED',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
