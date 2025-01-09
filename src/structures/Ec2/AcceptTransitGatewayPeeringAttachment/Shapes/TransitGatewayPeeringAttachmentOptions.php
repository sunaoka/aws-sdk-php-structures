<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptTransitGatewayPeeringAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enable'|'disable' $DynamicRouting
 */
class TransitGatewayPeeringAttachmentOptions extends Shape
{
    /**
     * @param array{DynamicRouting?: 'enable'|'disable'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
