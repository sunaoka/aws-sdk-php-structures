<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptTransitGatewayPeeringAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enable'|'disable'|null $DynamicRouting
 */
class TransitGatewayPeeringAttachmentOptions extends Shape
{
    /**
     * @param array{DynamicRouting?: 'enable'|'disable'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
